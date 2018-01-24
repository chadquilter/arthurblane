<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $table = 'services';
  public $primaryKey = 'id';
  public $timestamps = true;

  public $fillable = [
      'service_name',
      'service_type',
      'service_url'
  ];

  public function jobs(){
      return $this->belongsToMany('App\Job', 'job_service', 'service_id', 'id');
  }

}
