<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        if(auth()->check() == false)
        {
            return redirect()->route('dashboard.login-form');
        }
        $contactUs = ContactUs::paginate(12);
        return view('dashboard.contact-us.index',compact('contactUs'));
    }
}
