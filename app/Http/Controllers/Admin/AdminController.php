<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;

class AdminController extends Controller
{
    public function getAdminName(){
        return 'SlowArrow';
    }
}
