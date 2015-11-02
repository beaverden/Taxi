<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() 
    {
        $data = ['title' => 'Taxi',
                'Html'=> 'Illuminate\Html\HtmlFacade',
                'number' => '0-797-707-707'];
        return view('pages.index')->with($data);
    }
    
    public function about()
    {
        $data = ['title' => 'Taxi',
                'Html'=> 'Illuminate\Html\HtmlFacade',
                'number' => '0-797-707-707'];
        return view('pages.about')->with($data);
    }
}
   