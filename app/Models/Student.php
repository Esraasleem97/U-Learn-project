<?php


namespace App\Models;


use App\Scopes\StudentScope;

class Student extends User
{
    public static $TYPE = 'student';

    protected static function booted()
    {
        static::addGlobalScope(new StudentScope());
    }

}
