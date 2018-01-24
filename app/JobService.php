<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Service;
use Job;

class JobService extends Model
{
  protected $table = 'job_services';
  public $primaryKey = 'id';
  public $timestamps = true;

  public $fillable = [
      'job_id',
      'service_id'
  ];

}
