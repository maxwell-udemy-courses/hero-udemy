<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index($name){
        return view('admin.index', ['name' => $name]);
    }
}
