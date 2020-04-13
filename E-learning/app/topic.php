<?php

namespace App;
use App\assignment;
use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    public function assignment(){
      
        return $this->hasMany(assignment::class(),'topicid','topicid');
    }
}
