<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\QuotationTitle;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Api\QuotationFormController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('quotations',function(){
    $quotations  = QuotationTitle::with('list')->get();
    return response()->json([
        'data' => $quotations
    ], 200);
});

Route::get('countries',function(){
    return response()->json([
        'data' => DB::select('SELECT id , name FROM `countries`')
    ], 200);
});


Route::get('languages',function(){
    return response()->json([
        'data' => DB::select('SELECT id , name FROM `languages`')
    ], 200);
});

Route::get('cities/{countryId}',function($countryId){
    return response()->json([
        'data' => DB::select('SELECT  id , name FROM `cities` where country_id=\''.$countryId.'\' ')
    ], 200);
});

Route::post('quotation/store',[QuotationFormController::class,'store']);