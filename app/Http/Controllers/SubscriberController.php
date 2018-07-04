<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

use App\Mail\SubscriberEmail;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    //list
    public function list()
    {
    	$subscribers = Subscriber::orderBy('created_at', 'DESC')->paginate(2);

    	return view('cms.subscriber.subscriber', compact('subscribers'));
    }


    //delete
    public function delete($id)
    {
    	$sub = Subscriber::findOrFail(decrypt($id));
    	$sub->delete();

    	return back()->with('successMsg', 'Subscriber is deleted!');
    }


    //send email form
    public function sendEmail($id)
    {
    	$subscriber = Subscriber::findOrFail(decrypt($id));
    	$isEmail =true;

    	return view('cms.subscriber.subscriber', compact('isEmail', 'subscriber'));	

    }


    //send_email_to_subscriber
    public function send_email_to_subscriber(Request $request)
    {
        $subscriber = Subscriber::findOrFail(decrypt($request->subscriber_id));
        // dd($subscriber);

        $objDemo = new \stdClass();
        $objDemo->sender = 'mohammadbadarhashimi@gmail.com';
        $objDemo->subject = $request->subject;
        $objDemo->content = $request->content;
        $objDemo->receiver = $subscriber->firstname .' ' . $subscriber->lastname;
 
        Mail::to($subscriber->email)->send(new SubscriberEmail($objDemo));
    }
}
