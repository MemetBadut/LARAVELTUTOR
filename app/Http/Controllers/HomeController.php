<?php

namespace App\Http\HomeController;

abstract class HomeController
{
    public function index(){
        return view('home', ['title' => 'Homepage']);
    }
}
