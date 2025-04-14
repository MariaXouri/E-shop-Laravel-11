<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
use Mail;
class EmailController extends Controller
{
    public function emailstore(Request $request)
    {
        $email = new Email();

        // Store email

        $to1 = $email->to = "admin@gmail.com";
        $headers = $email->headers = $request->input('headers');
        // $email->headers = request('headers');
        $subject = $email->subject = $request->input('subject');
        // $email->subject = request(key: 'subject');
        $body = $email->body = $request->input('body');
        // $email->body = request(key: 'body');

        $email->save();



        $contactform = $request->json()->all();

        $data = array(
            'headers' => $email->headers,
            'to' => $email->to,
            'subject' => $email->subject,
            'body' => $email->body,

        );

        Mail::send('email', $data, function ($message) use ($data) {
            $message->from($data['headers'], 'Email Form');
            $message->sender($data['headers'], 'Email Form');
            $message->to($data['to'], "Email Form");
            $message->subject($data['subject']);
        });





        return response()->json(['email' => $email, 'headers' => $headers, 'subject' => $subject, 'body' => $body]);
    }
}
