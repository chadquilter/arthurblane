<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormItem extends Model
{
  protected $table = 'form_items';
  public $primaryKey = 'id';
  public $timestamps = true;
  protected $dates = ['created_at', 'updated_at', 'form_date'];

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

  public function item(){
      return $this->belongsToMany('App\FormItem', 'form_items', 'form_items_form_id', 'items_id');
  }

}
