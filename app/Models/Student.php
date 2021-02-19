<?php


namespace App\Models;


use App\Scopes\StudentScope;

class Student extends User
{
    public static $TYPE = 'student';

    public const FIRST_YEAR = 1;
    public const SECOND_YEAR = 2;
    public const THIRD_YEAR = 3;
    public const FOURTH_YEAR = 4;


    protected static function booted()
    {
        static::addGlobalScope(new StudentScope());
    }

}
