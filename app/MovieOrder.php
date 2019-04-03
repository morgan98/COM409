<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieOrder extends Model
{
    protected $fillable = [
        'MovieID','OrderID',
    ];
}
