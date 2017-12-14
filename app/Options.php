<?php

namespace OnlineExam;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $fillable = ['question_id', 'option_a', 'option_b', 'option_c', 'option_d'];

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
