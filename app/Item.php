<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
        'item_name',
        'item_summary',
        'item_weight',
        'item_amount',
        'item_count'
    ];

}
