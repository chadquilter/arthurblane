<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uom extends Model
{
    protected $table = 'uom_table';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'uom_name',
    ];

    public function items(){
        return $this->hasMany('App\Item');
    }

}
