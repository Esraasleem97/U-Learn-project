<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $validated)
 * @method static where(array $array)
 */
class Lessons extends Model
{
    use HasFactory;

    protected $guarded ;

    public function book()
    {
        return $this->belongsTo(Books::class);
    }
}
