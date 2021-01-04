<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{

    public function sendMail(Request $request)
    {
        $details = [
            'name'=> $request->name,
            'email'=>$request->email,
            'title'=>$request->title,
            'subject'=>$request->subject,
        ];
        Mail::to($details['email'])->send(new SendMail($details));
       return redirect()->route('order.list')->with('add','Gửi Thành Công');
    }
}
