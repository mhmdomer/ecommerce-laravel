<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryVisit extends Model
{
    protected $table = 'country_visits';
    protected $guarded = [];

    public function incrementVisits() {
        $this->increment('visits');
    }
}
