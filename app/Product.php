<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'public.product';
    protected $fillable = ['name', 'price','amount'];
    //
}
