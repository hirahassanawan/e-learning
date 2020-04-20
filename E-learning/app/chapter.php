<?php

namespace App;
use App\topic;
use App\course;
use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    protected $primaryKey = 'chapid';
    protected $fillable = ['name','desc','courseid'];
    
    public function topic(){
        return $this->belongsTo(topic::class, 'chapid','chapid');
    }

}
