<?php

namespace App\Http\Controllers;

use App\Mail\PostMail;
use Illuminate\Support\Facades\Mail;

abstract class Controller
{
    public function index(){
        Mail::to('mike@email.com')->send(new email());

    }
}
