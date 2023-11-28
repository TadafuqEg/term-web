<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\QuotationFormRequest;
use Illuminate\Http\Request;
use App\Models\QuotationForm;
use App\Models\QuotationFormDetails;

class QuotationFormController extends Controller
{
    public function store(QuotationFormRequest $request)
    {
        if(is_array($request->quotation_list) && count($request->quotation_list) > 0)
        {
            $faker = \Faker\Factory::create();
            $quotationForm = QuotationForm::create([
                'email' => $faker->email
            ]);
            foreach($request->quotation_list as $list)
            {
                QuotationFormDetails::create([
                    'value' => $list['value']??null,
                    'quotation_list_id' => $list['id'],
                    'quotation_form_id' => $quotationForm->id,
                    
                ]);
            }
        }
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
        
    }
}
