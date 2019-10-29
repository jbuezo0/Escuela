<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentYear extends Model
{
        protected $fillable = ['subject_id', 'year_id', 'teacher_id'];

        public function year(){
          return $this->belongsTo('App\Year');
        }
}
