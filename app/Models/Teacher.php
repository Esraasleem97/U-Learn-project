<?php


namespace App\Models;


use App\Scopes\TeacherScope;

class Teacher extends User
{
    public static $TYPE = 'teacher';


    protected static function booted()
    {
        static::addGlobalScope(new TeacherScope());
    }


    public function lessons()
    {
        return $this->hasMany(Lessons::class, 'teacher_id', 'id');
    }

}
