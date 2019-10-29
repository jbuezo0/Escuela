<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
      protected $fillable = ['codigo', 'name', 'is_active'];


      public function subjectYears(){
        return $this->belongsToMany('App\SubjectYear');
}
}
