<?php

namespace App;
use App\topic;
use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    protected $primaryKey = 'chapterid';
    
    public function topic(){
        return $this->belongsTo(topic::class, 'chapid','chapid');
    }

}
