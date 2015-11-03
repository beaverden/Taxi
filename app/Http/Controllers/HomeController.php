<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Crew;
use App\Models\Comment;
use App\Http\Requests\CommentFormRequest;

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
        
        return \Redirect::route('comments')
        ->with('message', 'Спасибо за ваш отзыв');
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

    
}
   