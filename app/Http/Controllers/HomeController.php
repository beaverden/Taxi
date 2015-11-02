<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Crew;
class HomeController extends Controller
{
    public function index() 
    {
        $data = ['title' => 'Такси в Москве',
                'number' => '0-797-707-707'];
        return view('pages.index')->with($data);
    }
    
    public function about()
    {
        $data = ['title' => 'О нас',
                'number' => '0-797-707-707',
                'crew' => Crew::all()];
        return view('pages.about')->with($data);
    }
}
   