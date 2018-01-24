<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    protected $table = 'item_types';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'item_type',
    ];

    public function items(){
        return $this->hasMany('App\Item');
    }

}
