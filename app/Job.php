<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Item;
use Service;
use JobItem;
use JobService;

class Job extends Model
{
    protected $table = 'jobs';
    public $primaryKey = 'job_id';
    public $timestamps = true;

    public $fillable = [
        'job_type',
        'job_title',
        'job_summary',
        'job_notes',
        'job_display',
        'job_media',
        'job_account',
        'job_address',
        'job_certs',
        'job_quote',
        'job_reciepts',
        'job_invoiced',
        'job_status'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function jobitems(){
        return $this->hasMany('App\JobItem', 'job_items_job_id', 'job_id');
    }

    public function jobservices(){
        return $this->hasMany('App\JobItem', 'job_id', 'job_id');
    }

}
