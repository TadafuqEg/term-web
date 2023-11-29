<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationForm extends Model
{
    use HasFactory;

    protected $table = 'quotation_forms';
    protected $guarded = [];

    public function from_details()
    {
        return $this->hasMany(QuotationFormDetails::class, 'quotation_form_id');
    }
}
