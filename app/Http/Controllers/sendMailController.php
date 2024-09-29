<?php

namespace App\Http\Controllers;



use Exception;
use Illuminate\Http\Request;

class sendMailController extends Controller
{
    public function sendMail()
    {
        try{


        }
        catch (Exception $e){

            \Log::error('error mesage'. $e->getMessage());

        }
    }
}
