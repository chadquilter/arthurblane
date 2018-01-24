<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'address1',
        'address2',
        'zipcode',
        'city',
        'state',
        'country',
        'code'
    ];

}
