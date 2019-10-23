<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    use SearchableTrait;

    protected $searchable = [
        // column with priorities
        'columns' => [
            'products.name' => 6,
            'products.details' => 3,
            'products.description' => 2,
        ],
    ];

    protected $guarded = [];

    public function scopeMightAlsoLike($query) {
        return $query->inRandomOrder()->take(3);
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
