<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provider extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'cpf_cnpj',
        'address',
        'city',
        'state',
        'zip_code',
        'service_type', // Ex: pedreiro, pintor, eletricista, etc.
        'company_name',
        'contact_person',
        'notes',
        'cost_per_hour',
        'cost_per_day'
    ];
}
