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

    public function items(){
        return $this->belongsToMany('App\FormItem', 'form_items', 'form_items_form_id', 'items_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

}
