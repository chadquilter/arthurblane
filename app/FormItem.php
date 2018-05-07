<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormItem extends Model
{
  protected $table = 'form_items';
  public $primaryKey = 'id';
  public $timestamps = true;

  public $fillable = [
    'form_items_form_id',
    'items_id',
    'user_id',
    'amount',
    'qty',
    'primary_group',
    'secondary_group',
    'removed',
    'primary_total',
    'discount'
  ];

  public function forms(){
      return $this->belongsToMany('App\Form', 'form_items', 'form_id', 'forms_items_form_id');
  }

}
