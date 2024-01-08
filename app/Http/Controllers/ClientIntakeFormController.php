<?php

namespace App\Http\Controllers;

use App\Models\ClientIntakeForm;
use Illuminate\Http\Request;

class ClientIntakeFormController extends Controller
{
    public function store(Request $request)
    {
        if(isset($request->email))
        {
            $checkQuotationForm = ClientIntakeForm::where('email',$request->email)->where('created_at','>=',now()->format('Y-m-d').' 00:00:00')->where('created_at','<=',now()->format('Y-m-d').' 23:59:59')->count();
            if($checkQuotationForm > 0){
                return redirect()->back()->with('error', 'A request is allowed under procedure and another is not allowed until after 24 hours have passed');
            }
        }
        $data = $request->all();
        $data['specific_period'] = null;
        if(isset($data['date_from'])){
            $data['specific_period'] = $data['specific_period'].$data['date_from'];
        }
        if(isset($data['date_to'])){
            $data['specific_period'] = $data['specific_period'].' / '.$data['date_to'];
        }
        if(isset($data['research_sources_you_would_like_us_to_explore']))
        {
            $data['research_sources_you_would_like_us_to_explore'] = serialize($data['research_sources_you_would_like_us_to_explore']);
        }
        if(isset($data['social_Listening_analyses_you_would_like_to_be_included_in_your_study']))
        {
            $data['social_Listening_analyses_you_would_like_to_be_included_in_your_study'] = serialize($data['social_Listening_analyses_you_would_like_to_be_included_in_your_study']);
        }
        if(isset($data['social_Presence_analyses_you_would_like_to_be_included_in_your_study']))
        {
            $data['social_Presence_analyses_you_would_like_to_be_included_in_your_study'] = serialize($data['social_Presence_analyses_you_would_like_to_be_included_in_your_study']);
        }
        
        ClientIntakeForm::create($data);
        return redirect()->route('web.thanks');
    }
}
