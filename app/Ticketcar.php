<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticketcar extends Model
{
    //
    protected $table = 'ticketcars';
    protected $fillable = [
        'year',
        'month',
        'day',
        'start',
        'arrive',
    ];
}
