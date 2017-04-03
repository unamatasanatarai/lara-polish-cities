<?php

namespace Unamatasanatarai\GeoCities\Models;

use Illuminate\Database\Eloquent\Model;

class GeoCommunity extends Model
{

    protected $table = 'geo_communities';
    protected $fillable = [
        'gov_province_id',
        'gov_county_id',
        'gov_id',
        'name',
    ];

}