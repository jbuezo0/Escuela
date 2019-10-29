<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
   protected $table = 'student_subject_years';
   protected $fillable = ['student_id', 'subject_year_id', 'score'];


   public function student(){
     return $this->belongsTo('App\Student');

   }
   public function subjectYear(){
     return $this->belongsTo('App\SubjectYear');
}
}
