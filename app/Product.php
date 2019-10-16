<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function scopeMightAlsoLike($query) {
        return $query->inRandomOrder()->take(3);
    }
}
