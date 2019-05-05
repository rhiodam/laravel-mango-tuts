<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    //
    public function index(){

        Mail::to("dev.cerdas.skd@gmail.com")->send(new SendMail());

        return "Email telah dikirim";
    }
}
