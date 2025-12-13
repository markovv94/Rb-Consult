<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneCallback extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'status',
    ];
}
