<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('homes');
    }
    public function devices(){
        return view('devices');
    }
    public function arduino(){
        return view('arduino');
    }
    public function komputer(){
        return view('komputer');
    }
    public function proyektor(){
        return view('proyektor');
    }
}
