<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    //index function to display all the table details
    public function index(){
        $title = "Messages Recieved";
        $messages = Message::all();
        $totalMessages = Message::count();
        return view('admin.dashboard', compact('title', 'messages', 'totalMessages'));
    }

    //store function to store the message
    public function store(Request $request){
        //validate the user input
        $validatedData= $request->validate([
            'username' => 'required|string|min:1|max:255',
            'message' => 'required|string|min:2|max:400',
        ]);

        Message::create($validatedData);

        return redirect('/')->with('success', 'Your message has been sent succefully!');
    }
}
