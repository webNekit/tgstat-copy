<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        return view('messages.index');
    }
    public function show(Message $message)
    {
        return view('messages.show', ['message' => $message]);
    }
}
