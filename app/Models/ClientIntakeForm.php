<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientIntakeForm extends Model
{
    use HasFactory;
    protected $guarded = ['progress'];
}
