<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SendMail;

use Mail;

class SendMailController extends Controller
{
    public function send(Request $request){
    
    // フォームからのリクエストデータ全てを$contentに代入
    $content = $request->all();
    $mail = $request->input('email');

	Mail::to($mail)
    ->send(new SendMail($content));

    return redirect('/')->with('completed','応募完了');

    }

    


}
