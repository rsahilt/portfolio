<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class AdminController extends Controller
{
    public function index(){
        $title = 'Welcome, Sahil';
        $messages = Message::all();
        $totalMessages = Message::count();
        return view('admin.dashboard', compact('title', 'messages', 'totalMessages'));
    }
}
