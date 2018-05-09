<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Form extends Model
{
    protected $table = 'forms';
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $dates = ['created_at', 'updated_at', 'form_date'];

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

    public function items()
    {
      return $this->belongsToMany('App\FormItem', 'form_items', 'form_items_form_id', 'items_id');
    }

    public function addresses()
    {
      return $this->belongsToMany('App\FormAddress', 'form_addresses', 'form_address_address_id', 'address_id');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }

}
