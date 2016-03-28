<?php

namespace App\Http\Controllers;

use Flash;
use Redirect;
use Firewall;

use App\Http\Controllers\Controller;

use App\Models\Crew;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Contact;

use App\Http\Requests\CommentFormRequest;
use App\Http\Requests\OrderFormRequest;

class HomeController extends Controller
{
    /**
     * 
     * @return type view
     */
    public function index() 
    {
        $data = ['title' => 'Taxi',
                 'number' => Contact::find(1)->tel];
        return view('pages.mainUserPages.index')->with($data);
    }
    
    /**
     * 
     * @return type view
     */
    public function about()
    {
        $data = ['title' => 'About us',
                'number' => Contact::find(1)->tel,
                'crew' => Crew::all()];
        return view('pages.mainUserPages.about')->with($data);
    }
    /**
     * 
     * @return type view
     */
    public function comments()
    {
        $data = ['title' => 'Comments',
                'number' => Contact::find(1)->tel,
                'comments' => Comment::paginate(10)];
        return view('pages.mainUserPages.comments')->with($data);
    }
    /**
     * If the user is blocked - he is not able to leave a comment
     * @param CommentFormRequest $request Request
     * @return type Redirect
     */
    public function addComment(CommentFormRequest $request) 
    {
        $ip = $request->getClientIp();
        $blacklisted = Firewall::isBlacklisted($ip);
        if ($blacklisted) {
            
            Flash::warning('Sorry, you have been blocked and you can\'t leave comments right now');
            return Redirect::route('comments');  
            
        } else {
            
            $newMessage = new Comment;
            $newMessage->comment = $request->get('comment');       
            $newMessage->name = $request->get('name');
            $newMessage->email = $request->get('email');
            $newMessage->ip = $ip;

            $newMessage->save();

            Flash::success('Thank you for your opinion!');
            return Redirect::route('comments');
        }
        
    }
    
    /**
     * Returns the order page
     * @return type view
     */
    
    public function order() 
    {
        $data = ['title' => 'Order',
                 'number' => Contact::find(1)->tel];
        return view('pages.mainUserPages.order')->with($data);
    }
    
    /**
     * If the client is banned, he will be not able to order
     * @return type Redirect
     */
    
    public function addOrder(OrderFormRequest $request) 
    {
        $ip = $request->getClientIp();
        $blacklisted = Firewall::isBlacklisted($ip);
        if ($blacklisted) {
            Flash::warning('Sorry, you have been blocked and you can\'t order right now');
            return Redirect::route('order');
        } else {
            $newOrder = new Order;
            $newOrder->name = $request->get('name');
            $newOrder->phone = $request->get('phone');
            $newOrder->adress = $request->get('adress');
            $newOrder->destination = $request->get('destination');
            $newOrder->ip = $ip;

            $newOrder->save();
            Flash::success('Thank you for your order!');
            return Redirect::route('order');
        }
   
    }
    
    /**
     * Returns contacts.blade.php page
     * @return type view
     */
    public function contacts() {
        $data = ['title' => 'Contacts',
                 'number' => Contact::find(1)->tel,
                 'contacts' => Contact::all()];
        return view('pages.mainUserPages.contacts')->with($data);
    }
}
   