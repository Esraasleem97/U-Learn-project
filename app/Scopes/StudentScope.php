<?php


namespace App\Scopes;


use App\Models\Student;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class StudentScope implements Scope
{


    public function apply(Builder $builder, Model $model)
    {
        $builder->where(['type' => Student::$TYPE]);
    }
}
