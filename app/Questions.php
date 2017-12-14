<?php

namespace OnlineExam;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = ['subject_id', 'question'];

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
