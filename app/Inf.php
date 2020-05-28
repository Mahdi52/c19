<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inf extends Model
{
    protected $fillable = [
    'Confirmed','Recovered','Deaths'
    ];
}
