<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $fillable = [
       'user_id', 'status'
  ];

  public function projectfiles()
  {
      return $this->hasMany('App\ProjectFile');
  }
}
