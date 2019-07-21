<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['nome','valor','categoria'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'products';
}
