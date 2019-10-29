<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
  protected $fillable = ['year', 'is_active'];


  public function subjectYears(){
    return $this->belongsToMany('App\SubjectYear');
  }



}
