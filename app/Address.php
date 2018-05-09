<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'name',
        'address1',
        'address2',
        'zipcode',
        'city',
        'state',
        'country',
        'code'
    ];

    public function jobs(){
        return $this->belongsToMany('App\Job', 'job_items');
    }

    public function forms(){
        return $this->belongsToMany('App\Form', 'form_items');
    }
}
