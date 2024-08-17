<?php

namespace App\Http\Controllers;

use App\Models\Chanel;
use Illuminate\Http\Request;

class ChanelController extends Controller
{
    public function show(Chanel $chanel)
    {
        return view('chanel', ['chanel' => $chanel]);
    }
}
