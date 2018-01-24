<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Service;

class JobService extends Model
{
  protected $table = 'job_services';
  public $primaryKey = 'id';
  public $timestamps = true;

  public $fillable = [
      'job_id',
      'service_id'
  ];

  public function service(){
      return $this->hasMany('App\Service', 'id', 'service_id');
  }

}
