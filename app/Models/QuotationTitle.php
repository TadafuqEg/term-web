<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationTitle extends Model
{
    use HasFactory;
    protected $table = 'quotation_titles';
    protected $guarded = [];


    public function list()
    {
        return $this->hasMany(QuotationList::class, 'quotation_title_id');
    }
}
