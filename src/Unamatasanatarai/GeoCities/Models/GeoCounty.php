<?php

namespace Unamatasanatarai\GeoCities\Models;

use Illuminate\Database\Eloquent\Model;

class GeoCounty extends Model
{

    protected $table = 'geo_counties';
    protected $fillable = [
        'gov_province_id',
        'gov_id',
        'name',
    ];

}