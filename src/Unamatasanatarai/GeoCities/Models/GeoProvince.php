<?php

namespace Unamatasanatarai\GeoCities\Models;

use Illuminate\Database\Eloquent\Model;

class GeoProvince extends Model
{

    protected $table = 'geo_provinces';
    protected $fillable = [
        'gov_id',
        'name',
    ];

}