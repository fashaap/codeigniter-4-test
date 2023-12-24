<?php

namespace App\Controllers;

class News extends BaseController
{
    public function index()
    {   
        return view('news');
    }
    
    public function article()
    {
        return view('articles');
    }
}
