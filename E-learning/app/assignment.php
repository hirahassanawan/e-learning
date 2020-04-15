<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assignment extends Model
{
    protected $primaryKey = 'assignid';
    protected $fillable = ['name','file','topicid','duedate'];
}
