<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table = 'Services';
    protected $fillable = ['name', 'text', 'icon'];
}
