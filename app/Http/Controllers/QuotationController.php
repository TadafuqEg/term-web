<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuotationTitle;
use Illuminate\Support\Facades\DB;

class QuotationController extends Controller
{
    public function quotation()
    {
        $quotations = QuotationTitle::with('list')->get();
        $countries = DB::select('SELECT id , name FROM `countries`');
        $languages = DB::select('SELECT id , name FROM `languages`');
        return view('web.getquotation',compact('quotations','countries','languages'));
    }
}
