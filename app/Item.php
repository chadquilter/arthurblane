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
        'item_type',
        'item_uom',
        'item_count'
    ];

    public function jobs(){
        return $this->belongsToMany('App\Job', 'job_items', 'form_items_form_id', 'items_id');
    }

    public function forms(){
        return $this->belongsToMany('App\Form', 'form_items', 'form_items_form_id', 'items_id');
    }

    public function ItemType(){
        return $this->belongsTo('App\ItemType');
    }

    public function Uom(){
        return $this->belongsTo('App\Uom');
    }

}
