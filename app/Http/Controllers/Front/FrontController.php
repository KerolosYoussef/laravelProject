<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function getIndex(){

        return view('welcome');
    }
    public function getLanding(){
        return view('landing');
    }
    public function getAbout()
    {
        return view('about');
    }
}
