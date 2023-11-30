<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuotationForm;
use App\Models\QuotationFormDetails;

class QuotationFormController extends Controller
{
    public function store(Request $request)
    {


        if(is_array($request->quotation_list) && count($request->quotation_list) > 0)
        {
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
        return redirect()->back();
        dd($quotationForm,QuotationFormDetails::where('quotation_form_id',$quotationForm->id)->get());
    }
}
