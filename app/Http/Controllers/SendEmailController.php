<?php

namespace App\Http\Controllers;

use App\Mail\SendContactEmail;
use App\Mail\SendEmail;
use App\Mail\SendJoinAUnitEmail;
use App\Mail\SendTalkToPastorEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{

    public function talkToPastor(Request $request) {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'reach' => 'required',
            'reachValue' => 'required'
        ]);

        $data = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'reach' => $request->reach,
            'reachValue' => $request->reachValue,
        );

        Mail::to('pastor@revelationcity.ca')->send(new SendTalkToPastorEmail($data));

        return  back()->with('success', 'Sent successfully');
    }


    public function joinServiceUnit(Request $request) {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string',
            'unit' => 'required',
        ]);

        $data = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'unit' => $request->unit,
        );

        Mail::to('pastor@revelationcity.ca')->send(new SendJoinAUnitEmail($data));

        return  back()->with('success', 'Sent successfully');
    }

    public function contactemail(Request $request) {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required',
        ]);

        $data = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        );

        Mail::to('pastor@revelationcity.ca')->send(new SendContactEmail($data));

        return  back()->with('success', 'Sent successfully');
    }
}
