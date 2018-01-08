<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $fillable = [
        'year',
        'month',
        'day',
        'start',
        'arrive',
        'station',
        'time',
        'quantity',
        'price',
        'name',
    ];
}
