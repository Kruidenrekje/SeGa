<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProjectFile extends Model
{

   protected $fillable = [
    'mechanic_id', 'project_id'
 ];

 public function project() {
    return $this->belongsTo('App\Project');
 }
}
