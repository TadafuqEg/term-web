<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'company' => 'required',
            'message' => 'required',
        ]);
        $contactUs = new ContactUs();
        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->phone_number = $request->phone_number;
        $contactUs->company = $request->company;
        $contactUs->message = $request->message;
        $contactUs->save();
        return redirect()->route('web.thanks');
    }
}
