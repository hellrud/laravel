<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
       $data = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'message' => ['required', 'string']
        ]);
        
        $msg = "Website Contact:\n\n" . $data['name'] . "\n" . $data['email'] . "\n" . $data['message'];

        $msg = rawurlencode($msg);

        $token = env('BOT_TOKEN');

        fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id=650181150&text={$msg}", "r");
     
        return to_route('guestbook.index')->with('message', "Message sent");
    }
}
