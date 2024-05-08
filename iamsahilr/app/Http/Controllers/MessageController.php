<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
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
