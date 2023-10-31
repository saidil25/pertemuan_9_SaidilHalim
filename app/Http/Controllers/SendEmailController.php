<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Mail\SendEmail;
use Exception;
use Illuminate\Http\Request;
use Mail;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('emails.kirim-email');
    }

    public function store(Request $request)
    {
        $data = $request->all();
    
        // Kirim email selamat datang
        Mail::to($data['email'])->send(new SendEmail($data));
    
        return redirect()->route('kirim-email')->with('success', 'Email berhasil dikirim');
    }
    
}