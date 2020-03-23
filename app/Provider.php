<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'public.provider';
    protected $fillable = ['name', 'cnpj'];

    // public function caixa(){
    //     return $this->belongsTo(Caixa::class, 'caixa_id', 'id');
    // }
}
