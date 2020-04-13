<?php

namespace App;
use App\chapter;
use App\teacher;
use App\level;
use App\language;
use App\requirement;
use Illuminate\Database\Eloquent\Model;
class Course extends Model
{
    protected $primaryKey = 'courseid';

    public function chapter(){
       return $this->hasMany(chapter::class, 'courseid','courseid');
    }
    public function language(){
        return $this->hasMany(language::class, 'langid','lanid');
    }
    public function requirement(){
        return $this->hasMany(requirement::class, 'reqid','reqid');
    }
    public function level(){
        return $this->hasOne(level::class, 'levelid','levelid');
    }
    public function teacher(){
        return $this->hasOne(teacher::class, 'teacherid','teacherid');
    }
}
