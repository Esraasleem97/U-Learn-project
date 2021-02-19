<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static select(...$string)
 * @method static where(array $array)
 * @method static findOrFail($id)
 */
class Books extends Model
{
    use HasFactory;

    public function lessons()
    {
        return $this->hasMany(Lessons::class);
    }
}
