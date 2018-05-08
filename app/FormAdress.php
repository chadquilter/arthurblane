<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormAdress extends Model
{
  protected $table = 'form_adresses';
  public $primaryKey = 'id';
  public $timestamps = true;

  public $fillable = [
    'form_id',
    'address_id',
    'user_id',
    'uom_id',
    'units_traveled',
    'fuel_cost',
    'primary_group',
    'secondary_group',
    'primary_address',
    'create_at',
    'update_at'
  ];

  public function Uom(){
      return $this->belongsTo('App\Uom');
  }
  
}
