<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $title = 'Welcome, Sahil';
        return view('/admin/dashboard', compact('title'));
    }
}
