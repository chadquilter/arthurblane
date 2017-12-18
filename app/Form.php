<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'form_type',
        'form_subtype',
        'form_title',
        'form_body',
        'form_date',
        'form_active',
        'form_created_by'
    ];

}
