<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Not using this request object yet
// use App\Http\Requests;

// I can comment that out because they are already in the same directory
// use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    // Method I made in the routes file
    public function home()
    {
        $people = ['Keaton', 'Jeremy', 'Jeff', 'Fish'];
        return view('welcome', compact('people'));
    }

    public function about()
    {
        return view('pages.about'); // the . is the same as / It just looks cleaner
    }

    
  
}
