<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->hasOne(course::class, 'id', 'course_id');
    }
}
