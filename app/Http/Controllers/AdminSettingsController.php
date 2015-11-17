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
use Hash;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Comment;
use App\Models\Order;


use App\Http\Requests\ChangePasswordRequest;

class AdminSettingsController extends Controller
{
    /**
     * 
     * @return type view
     */
    public function adminGeneral() 
    {
        $data = [
            'title' => 'Общие настройки'
        ];
        return view('pages.options.adminGeneral')->with($data); 
    }  
    
    
    /**
     * 
     * @return type view
     */
    public function generalPassword() 
    {
        $data = [
            'title' => 'Поменять пароль'
        ];
        return view('pages.options.generalPassword')->with($data); 
    }
    
    /**
     *  Changes the users password
     * @return type Redirect
     */
    public function changePassword(ChangePasswordRequest $request) 
    {
        if (Auth::check())
        {
            $user = Auth::user();
            $old_password = Input::get('oldpassword');
            $new_password = Input::get('newpassword');
            $rnew_password = Input::get('rnewpassword');
            
            $current_password = $user->password;
            if (Hash::check($old_password, $current_password) &&
                $new_password == $rnew_password) 
            {
                $user->password = Hash::make($new_password);
                $user->save();
                
                Flash::message('Пароль успешно изменен');
                return Redirect::route('generalPassword');
            } else 
            {
                Flash::message('Введите все данные правильно');
                 return Redirect::route('generalPassword');
            }
        } else {
            return Reditect::route('admin');
        }
    }
}
