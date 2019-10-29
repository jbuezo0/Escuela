<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  protected $fillable = ['fullname', 'birthdate', 'is_active'];



  public function subjectYears(){
    return $this->belongsToMany('App\SubjectYear');

  
}

}
