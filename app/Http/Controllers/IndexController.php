<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
class IndexController extends Controller
{
    public function index(){
        return view('home/index');
    }
}
