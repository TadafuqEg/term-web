<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuotationForm;
use App\Models\QuotationTitle;
use Barryvdh\DomPDF\Facade\Pdf;
class QuotationFromController extends Controller
{
    public function list()
    {
        $quotationForms = QuotationForm::with('from_details')->paginate(12);
        return view('dashboard.quotation-forms.index',compact('quotationForms'));
    }

    public function exportPDF($formId){
        $quotations = QuotationTitle::with('list')->get();
        $quotationForm = QuotationForm::with('from_details')->find($formId);
        $data = [
            'quotations' => $quotations,
            'quotationForm' => $quotationForm,
            'quotationSelectList' =>  $quotationForm->from_details->pluck('quotation_list_id')->toArray()
        ];

        // dd($data['quotationForm']['from_details']->where('quotation_list_id',1)->first()->value);
        
        $pdf = Pdf::loadView('pdf.quotations', $data);
        return $pdf->download('quotation-form.pdf');
    }
}
