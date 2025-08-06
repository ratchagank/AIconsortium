<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkControl extends Controller
{
    public function viewindex()
    {
        return view('index');        
    }
    public function viewevents()
    {
        return view('events');        
    }
    public function viewabout()
    {
        return view('about');        
    }
    public function viewcontact()
    {
        return view('contact');        
    }
    public function viewblog()
    {
        return view('blog');        
    }
    public function viewblog1()
    {
        return view('blog1');        
    }
    public function viewblog2()
    {
        return view('blog2');        
    }
}