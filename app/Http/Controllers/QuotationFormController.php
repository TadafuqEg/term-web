<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuotationForm;
use App\Models\QuotationFormDetails;

class QuotationFormController extends Controller
{
    public function store(Request $request)
    {

        dd($request->all());
        if(is_array($request->quotation_list) && count($request->quotation_list) > 0)
        {
            $checkQuotationForm = QuotationForm::where('email',$request->email)->where('created_at','>=',now()->format('Y-m-d').' 00:00:00')->where('created_at','<=',now()->format('Y-m-d').' 23:59:59')->count();
            if($checkQuotationForm > 0){
                return redirect()->back()->with('error', 'A request is allowed under procedure and another is not allowed until after 24 hours have passed');
            }
            $quotationForm = QuotationForm::create([
                'email' => $request->email,
                'name' => $request->name,
                'phone' => $request->phone,
            ]);
            foreach($request->quotation_list as $list)
            {
                if(isset($list['id']) && $list['id'] !=null && $list['id'] != '')
                {
                    QuotationFormDetails::create([
                        'value' => $list['value']??null,
                        'quotation_list_id' => $list['id'],
                        'quotation_form_id' => $quotationForm->id,
                        
                    ]);
                }
            }
        }
        return redirect()->route('web.thanks');
        
    }
}
