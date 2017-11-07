<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobitem extends Model
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
