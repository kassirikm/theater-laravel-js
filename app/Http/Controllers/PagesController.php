<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Show;
use App\Location;

class PagesController extends Controller
{
    public function index(){
        
        $shows = Show::inRandomOrder()->take(4)->get();
        return view('pages.index')->with('shows', $shows);
    }
    
    public function contact(){
        return view('pages.contact');
    }
    
    public function spectacles(){
        return view('pages.spectacles');
    }
}
