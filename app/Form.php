<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'form_type',
        'form_subtype',
        'form_title',
        'form_salutation',
        'form_contact',
        'form_from',
        'form_closing',
        'form_body',
        'form_date',
        'form_active',
        'form_created_by'
    ];

}
