<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuotationTitle;
use App\Models\QuotationList;

class QuotationController extends Controller
{
    public function modify()
    {
        if(auth()->check() == false)
        {
            return redirect()->route('dashboard.login-form');
        }
        $quotations  = QuotationTitle::with('list')->get();
        return view('dashboard.quotations.modify',compact('quotations'));
    }

    public function index()
    {
        if(auth()->check() == false)
        {
            return redirect()->route('dashboard.login-form');
        }
        $quotations  = QuotationTitle::with('list')->get();
        return view('dashboard.quotations.index',compact('quotations'));
    }
}
