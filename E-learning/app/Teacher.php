<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{   protected $primaryKey = 'teacherid';
    protected $fillable = [ 'firstname','lastname','email','bio','title','image'];
}
