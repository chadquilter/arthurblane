<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        'job_media',
        'job_account',
        'job_address',
        'job_certs',
        'job_quote',
        'job_reciepts',
        'job_invoiced'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }



}
