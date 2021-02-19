<?php


namespace App\Scopes;


use App\Models\Teacher;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TeacherScope implements Scope
{


    public function apply(Builder $builder, Model $model)
    {
        $builder->where(['type' => Teacher::$TYPE]);
    }
}
