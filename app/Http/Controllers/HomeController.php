<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;
use Session;
use Auth;
use Validator;
use Input;
use Redirect;
use Firewall;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Crew;
use App\Models\Comment;
use App\Models\Order;

use App\Http\Requests\CommentFormRequest;
use App\Http\Requests\OrderFormRequest;
use App\Http\Requests\LoginFormRequest;

class HomeController extends Controller
{
    /**
     * 
     * @return type view
     */
    public function index() 
    {
        $data = ['title' => 'Такси в Москве',
                'number' => '0-797-707-707'];
        return view('pages.index')->with($data);
    }
    
    /**
     * 
     * @return type view
     */
    public function about()
    {
        $data = ['title' => 'О нас',
                'number' => '0-797-707-707',
                'crew' => Crew::all()];
        return view('pages.about')->with($data);
    }
    /**
     * 
     * @return type view
     */
    public function comments()
    {
        $data = ['title' => 'Отзывы',
                'number' => '0-797-707-707',
                'comments' => Comment::paginate(10)];
        return view('pages.comments')->with($data);
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
            
            Flash::warning('Вы были заблокированы, вы не можете оставлять отзывы');
            return Redirect::route('comments');  
            
        } else {
            
            $newMessage = new Comment;
            $newMessage->comment = $request->get('comment');       
            $newMessage->name = $request->get('name');
            $newMessage->email = $request->get('email');
            $newMessage->ip = $ip;

            $newMessage->save();

            Flash::success('Спасибо за ваш отзыв.');
            return Redirect::route('comments');
        }
        
    }
    
    /**
     * 
     * @return type view
     */
    
    public function order() 
    {
        $data = ['title' => 'Заказ',
                 'number' => '0-797-707-707'];
        return view('pages.order')->with($data);
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
            Flash::warning('Извините, вы были заблокированы, вы не можете оставлять заказ');
            return Redirect::route('order');
        } else {
            $newOrder = new Order;
            $newOrder->name = $request->get('name');
            $newOrder->phone = $request->get('phone');
            $newOrder->adress = $request->get('adress');
            $newOrder->destination = $request->get('destination');
            $newOrder->ip = $ip;

            $newOrder->save();
            Flash::success('Спасибо за заказ. В скором времени вам перезвонят.');
            return Redirect::route('order');
        }
   
    }
    
}
   