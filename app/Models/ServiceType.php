<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $fillable = [
        'name', // Ex: pedreiro, pintor, eletricista, etc.
        'description'
    ];
}
