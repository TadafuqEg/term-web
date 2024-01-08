<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ClientIntakeForm;
use Illuminate\Http\Request;

class ClientIntakeFormController extends Controller
{
    public function list()
    {
        if(auth()->check() == false)
        {
            return redirect()->route('dashboard.login-form');
        }
        $clientIntakeForms = ClientIntakeForm::paginate(12);
        return view('dashboard.client-intake-forms.index',compact('clientIntakeForms'));
    }

    public function show($id)
    {
        if(auth()->check() == false)
        {
            return redirect()->route('dashboard.login-form');
        }
        $clientIntakeForm = ClientIntakeForm::find($id);
        return view('dashboard.client-intake-forms.show',compact('clientIntakeForm'));
    }
}
