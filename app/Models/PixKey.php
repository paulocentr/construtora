<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PixKey extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'key_type', // Ex: email, phone, cpf, cnpj, random
        'key_value',
        'owner_id',
        'owner_type'
    ];

    public function owner()
    {
        return $this->morphTo();
    }
}
