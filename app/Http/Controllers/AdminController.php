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

use App\Models\Comment;
use App\Models\Order;

use App\Http\Requests\LoginFormRequest;
/** 
 * Handles admin page requests 
 */
class AdminController extends Controller
{
   
    /**
    * Handles whether the user is logged in or not
     * If not - sends him to login page (admin)
     * Else - sends him to route (adminOrders)
    * @return type Redirect | view
    */  
    public function admin() 
    {
        if (Auth::check()) {
            $data = ['title' => 'Диспетчер'];
            return Redirect::route('adminOrders');
        } else {
            $data = ['title' => 'Диспетчер'];
            return view('pages.admin')->with($data);
        }
           
    }
    /**
     * Handles the post request to login
      * If the authentification is successful - sends the user back to (admin) 
      * Now he is logged in 
     * @param LoginFormRequest $request
     * @return type Redirect
     */
    public function adminLogin(LoginFormRequest $request) {
        $data = ['password' => Input::get('password')];
        if (Auth::attempt($data)) {
            return Redirect::route('adminOrders');
        } else {
            Flash::message('Ошибка, попробуйте снова');
            return Redirect::route('admin');
        }
    }
    /**
     * Handles the request to /admin/orders/ pages
      * If the user is logged in - returns the view
      * Else redirects him to login page  
     * @return type view | Redirect
     */
    public function adminOrders() {
        if (Auth::check()) {
            $data = [
                'title' => 'Заказы',
                'orders' => Order::paginate(10),
                'status' => 0,
            ];
            return view('pages.adminOrders')->with($data);
        } else {
            return Redirect::route('admin');
        }
        
    }
    /**
     * Returns view with status 1, showing only done orders
     * @return type view | Redirect
     */
    public function ordersDone() {
        if (Auth::check()) {
            $data = [
                'title' => 'Выполненные заказы',
                'orders' => Order::paginate(10),
                'status' => 1,
            ];
            return view('pages.adminOrders')->with($data);
        } else {
            return Redirect::route('admin');
        }
      
    }
    /**
     * Returns view with status 2, showing only erased orders
     * @return type view | Redirect
     */
    public function ordersErased() {
        if (Auth::check()) {
            $data = [
                'title' => 'Удаленные заказы',
                'orders' => Order::paginate(10),
                'status' => 2,
            ];
            return view('pages.adminOrders')->with($data);
        } else {
            return Redirect::route('admin');
        }
        
    }
    /**
     * Changes the order status in function of status given in
     * ajax request ('js/adminOrders.js')
     * 0 - active order
     * 1 - finished order
     * 2 - deleted order
     * !! If the user is banned - his orders won't be shown !!
     */
    public function orderStatus() {
        if (Auth::check()) {
            $id = Input::get('id');
            $status = Input::get('status');

            $order = Order::find($id);
            $order->status = $status;
            $order->save();
            die;
        } else {
            return Redirect::route('admin');
        }

    }
    /**
     * Handles the request to adminComments page
      * If the user is logged in - returns the view
      * Else redirects him to login page  
     * @return type view | Redirect
     */
    public function adminComments() {
        if (Auth::check()) {
            $data = [
                'title' => 'Отзывы',
                'comments' => Comment::orderBy('created_at','DESC')->paginate(10),
            ];
            return view('pages.adminComments')->with($data);
        } else {
            return Redirect::route('admin');
        }
        
    }
    /**
     * Deletes a comment selected from adminComments
     * @return type Redirect
     */
    public function deleteComment() {
        if (Auth::check()) {
            $id = Input::get('id', true);
            $comment = Comment::find($id);
            $comment->delete();
            die;
        }   else {
            return Redirect::route('admin');
        }
    }
    
    public function logout() {
        if (Auth::check()){
            Auth::logout();
        }
        return Redirect::route('admin');
    }

    
    /**
     * Inserts the given in ajax request ip to Firewall::blacklist
     * @return type Redirect
     */
    public function blockUser() {
        if (Auth::check()) {
            $ip = Input::get('ip',true);
            //Adds the given ip to blacklist
            $blacklisted = Firewall::isBlacklisted($ip);
            if (!$blacklisted) {
                Firewall::blacklist($ip);
            }
   
            die;
        } else {
            return Redirect::route('admin');
        }
    }
}
   