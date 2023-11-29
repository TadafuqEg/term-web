<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuotationForm;

class QuotationFromController extends Controller
{
    public function list()
    {
        $quotationForms = QuotationForm::with('from_details')->paginate(12);
        return view('dashboard.quotation-forms.index',compact('quotationForms'));
    }
}
