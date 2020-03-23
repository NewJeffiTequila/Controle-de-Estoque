<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $table = 'public.client';
    protected $fillable = ['name', 'cpf','value_buy'];
}
