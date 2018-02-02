<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function subjects()
    {
        return $this->belongsToMany('App/Models/Subjects', 'subject_teacher');
    }
}
