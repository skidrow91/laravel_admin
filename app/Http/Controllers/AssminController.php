<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AssminController extends Controller{

    public function index(){
        return view('backend.pages.index');
    }

    public function login(){
        return view('backend.login');
    }

    public function signup(){
        return view('backend.signup');
    }
}
