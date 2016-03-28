<?php


namespace App\Http\Controllers;

use Flash;
use Auth;
use Input;
use Redirect;
use Firewall;
use Hash;
use Image;
use App\Http\Controllers\Controller;
use App\Models\Blocked;
use App\Models\Contact;
use App\Models\Crew;

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
            'title' => 'Main settings'
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
            'title' => 'Change password'
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
                
                Flash::message('Password successfully changed');
                return Redirect::route('generalPassword');
            } else 
            {
                Flash::message('Enter all the date correctly');
                 return Redirect::route('generalPassword');
            }
        } else 
        {
            return Reditect::route('admin');
        }
    }
    /**
     * Returns blocked ips page
     * @return type view
     */
    public function blocked() 
    {
        if (Auth::check()) 
        {
            $data = [
                'title' => 'Blocked users',
                'blocked' => Blocked::paginate(30)
            ];
            return view('pages.options.blocked')->with($data);
        } else 
        {
            return Reditect::route('admin');
        }
        
    }
    
    /**
     * Removes a blocked ip. Makes it whitelisted
     * @return type Redirect
     */
    public function removeBlocked() 
    {
        if (Auth::check()) 
        {
            $ip = Input::get('ip');
            Firewall::whitelist($ip, true); 
            die;
        }
        else 
        {
            return Redirect::route('admin');
        }
        
    }
    
    /**
     * Returns the page with all changable and deletable contacts
     * @return type view | Redirect
     * 
     */
    public function changeContacts() 
    {
        if (Auth::check()) 
        {
            $data = [
                'title' => 'Contacts list',
                'contacts' => Contact::all(),
            ];
           return view('pages.options.changeContacts')->with($data);
        } else 
        {
            return Redirect::route('admin');
        }
    }
    
    /**
     * Saves the data given in a contact-input to the related contact
     * in the database
     * @return type Redirect
     */
    public function saveContact() 
    {
        if (Auth::check()) 
        {
            $id = Input::get('id', true);
            $number = Input::get('number', true);
            $info = Input::get('info', true);
            
            $contact = Contact::find($id);
            $contact->tel = $number;
            if ($info != null) 
            {
                $contact->info = $info;
            }
            $contact->save();
            
            die;
        } else 
        {
            return Redirect::route('admin');
        }
    }
    
    /**
     * Add the data given to the database
     * @return type Redirect
     */
    public function addContact() 
    {
        if (Auth::check()) 
        {
            $number = Input::get('number', true);
            $info = Input::get('info', true);
            
            $contact = new Contact();
            $contact->tel = $number;
            $contact->info = $info;
            $contact->save();
            
            die;
        } else 
        {
            return Redirect::route('admin');
        }
    }   
    
    /**
     * Deletes the comment selected by the admin
     * @return type Redirect
     */
    public function deleteContact() 
    {
        if (Auth::check()) 
        {
            $id = Input::get('id', true);
            
            $contact = Contact::find($id);
            $contact->delete();
            die;
        } else 
        {
            return Redirect::route('admin');
        }
    }
    /**
     * Returns changeCrew view
     * @return type
     */
    public function changeCrew() {
        if (Auth::check()) 
        {
            $data = [
                'crew' => Crew::all(),
                'title' => 'Crew',
                
            ];
            return view('pages.options.changeCrew')->with($data);
        } else 
        {
            return Redirect::route('admin');
        }
    }
    
    /** 
     * Adds a new member to the crew database
     * 
     * @return type Redirect
     */
    public function addMember() 
    {
        if (Auth::check()) 
        {
            $member = new Crew();
            $member->name = Input::get('name', true);
            $member->info = Input::get('info', true);
            $member->photo = "img/photos/images.jpg";
            if(Input::file())
            {
                //Member's photo is not default
                $image = Input::file('photo');
                $filename  = time() . '.' . $image->getClientOriginalExtension();

                $path = public_path('img/photos/' . $filename);


                Image::make($image->getRealPath())->resize(100, 100)->save($path);
                $member->photo = '/img/photos/'.$filename;
                
           }
           $member->save();
           Flash::message('Member successfully added');
           return Redirect::route('changeCrew');
        } else 
        {
            return Redirect::route('admin');
        }
    }
    
    /**
     * Saves the new data to the database
     * Saves only not-null fields
     * @return type
     */
    public function saveMember() 
    {
        if (Auth::check()) 
        {
            $id = Input::get('id', true);
            $member = Crew::find($id);
            
            $name = Input::get('name', true);
            $info = Input::get('info', true);
            
            if ($name != null) 
            {
                $mebmer->name = $name; 
            }
            if ($info != null) 
            {
                $mebmer->info = $info; 
            }

           
            if(Input::file())
            {
                $image = Input::file('photo');
                $filename  = time() . '.' . $image->getClientOriginalExtension();

                $path = public_path('img/photos/' . $filename);


                Image::make($image->getRealPath())->resize(100, 100)->save($path);
                $member->photo = '/img/photos/'.$filename;
                
           }
           $member->save();   
           Flash::message('Member successfully saved');
           
           return Redirect::route('changeCrew');
        } else 
        {
            return Redirect::route('admin');
        } 
    }
    
    public function deleteMember() 
    {
       if (Auth::check())
       {
            $id = Input::get('id', true);
            
            $member = Crew::find($id);
            $member->delete();
            die;
       } else 
        {
            return Redirect::route('admin');
        } 
    }
}
