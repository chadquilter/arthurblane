<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobItem extends Model
{
    protected $table = 'job_items';
    public $primaryKey = 'id';
    public $timestamps = true;

    public $fillable = [
      'job_items_job_id',
      'items_id',
      'user_id',
      'amount',
      'qty'
    ];


}
