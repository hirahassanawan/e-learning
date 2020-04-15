<?php

namespace App;
use App\assignment;
use App\video;
use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    public function assignment(){
      
        return $this->hasMany(assignment::class(),'topicid','topicid');
    }
  
   public function video(){

     return $this->hasMany(video::class,'topicid','topicid');
   }
}
