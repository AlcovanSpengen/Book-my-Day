<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;
<<<<<<< HEAD
use App\Mail\sendmail;
=======
>>>>>>> 00b1c63a9c7b88c95bb58600543fe508ecef6e85

use App\Http\Controllers\Controller;
use Illuminate\Mail\Mailer;
use Notification;

class PageController extends Controller
{
<<<<<<< HEAD
    public function getIndex()
    {
        return view('pages.home');
    }
    public function getAbout()
    {
        return view('pages.about');
    }
=======

>>>>>>> 00b1c63a9c7b88c95bb58600543fe508ecef6e85
    public function getContact()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request,
        [
            'email' => 'required|email',
            'subject'=> 'min:10',
            'message' => 'min:10'
        ]);

        $data = array(
           'email' => $request->email,
           'subject' => $request->subject,
           'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function($message) use ($data)
<<<<<<< HEAD
        {
            $message->from($data['email']);
            $message->to('hagger58@gmail.com');
            $message->subject($data['subject']);
        });

    // Session::first('succes', 'je email is verzonden');

    // return redirect()->url('/');

    }


}
=======
    {
        $message->form($data['email']);
        $message->to('hagger58@gmail.com');
        $message->subject($data['subject']);
    });

    Session::first('succes', 'je email is verzonden');

    return redirect()->url('/');

    }
}

>>>>>>> 00b1c63a9c7b88c95bb58600543fe508ecef6e85
