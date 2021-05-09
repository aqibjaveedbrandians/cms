<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;


class MialController extends Controller
{
    //
    public function sendEmail(){
        $details = [
            'title' => 'Mail From Aqib Javeed',
            'body' => 'This is for testing mail using gmail'
        ];
        Mail::to('lauth.laravel123@gmail.com')->send(new TestMail($details));
        return "Email Sent";
    }
}
