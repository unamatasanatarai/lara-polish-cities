<?php

namespace Unamatasanatarai\GeoCities\Models;

use Illuminate\Database\Eloquent\Model;

class GeoCity extends Model
{

    protected $table = 'geo_cities';
    protected $fillable = [
        'gov_province_id',
        'gov_county_id',
        'gov_community_id',
        'name',
    ];

}