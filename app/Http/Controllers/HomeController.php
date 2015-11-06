<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;
use Session;
use Auth;
use Validator;
use Input;
use Redirect;

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
     * @return type array
     */
    public function index() 
    {
        $data = ['title' => 'Такси в Москве',
                'number' => '0-797-707-707'];
        return view('pages.index')->with($data);
    }
    
    /**
     * 
     * @return type array
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
     * @param type $data array
     * 
     * @return type array
     */
    public function comments()
    {
        $data = ['title' => 'Отзывы',
                'number' => '0-797-707-707',
                'comments' => Comment::paginate(10)];
        return view('pages.comments')->with($data);
    }
    /**
     * 
     * @param CommentFormRequest $request Request
     * @return type array
     */
    public function addComment(CommentFormRequest $request) 
    {
        $newMessage = new Comment;
        $newMessage->comment = $request->get('comment');       
        $newMessage->name = $request->get('name');
        $newMessage->email = $request->get('email');
        
        $newMessage->save();
        
        Flash::success('Спасибо за ваш отзыв.');
        return Redirect::route('comments');
    }
    
    /**
     * 
     * @return type array
     */
    
    public function order() 
    {
        $data = ['title' => 'Заказ',
                 'number' => '0-797-707-707'];
        return view('pages.order')->with($data);
    }
    
    /**
     * 
     * @return type array
     */
    
    public function addOrder(OrderFormRequest $request) 
    {
        $newOrder = new Order;
        $newOrder->name = $request->get('name');
        $newOrder->phone = $request->get('phone');
        $newOrder->adress = $request->get('adress');
        $newOrder->destination = $request->get('destination');
        $newOrder->ip = $request->getClientIp();

        $newOrder->save();
        Flash::success('Спасибо за заказ. В скором времени вам перезвонят.');
        return Redirect::route('order');
        
    }
    
    /**
    * Handles whether the user is logged in or not
     * If not - sends him to login page (admin)
     * Else - sends him to (adminPage)
    * @return type array
    */  
    public function admin() 
    {
        if (Auth::check()) {
            $data = ['title' => 'Диспетчер'];
            return view('pages.adminPage')->with($data);
        } else {
            $data = ['title' => 'Диспетчер'];
            return view('pages.admin')->with($data);
        }
           
    }
    /**
     * Handles the post request to login
      * If the authentification is successful - sends the user back to (admin) 
      * But now logged in 
     * @param LoginFormRequest $request
     * @return type redirect
     */
    public function adminLogin(LoginFormRequest $request) {
        $data = ['password' => Input::get('password')];
        if (Auth::attempt($data)) {
            Flash::message('Logged!');
            return Redirect::route('admin');
        } else {
            Flash::message('Failed!');
            return Redirect::route('admin');
        }
    }
    
}
   