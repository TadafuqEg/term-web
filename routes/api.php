<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\QuotationTitle;
use Illuminate\Support\Facades\DB;
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
        'data' => DB::select('select id,name,region_code from countries')
    ], 200);
});