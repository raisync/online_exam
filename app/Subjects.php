<?php

namespace OnlineExam;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    protected $fillable = ['subject', 'user_id'];

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
