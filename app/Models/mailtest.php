<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mailtest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'date_of_birth'
    ];
}
