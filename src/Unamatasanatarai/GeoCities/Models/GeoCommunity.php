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

    public function province()
    {
        return $this->belongsTo(
            GeoProvince::class,
            'gov_province_id',
            'gov_id'
        );
    }

    public function county()
    {
        return $this->belongsTo(
            GeoCounty::class,
            'gov_county_id',
            'gov_id'
        )->where(
            'gov_province_id',
            $this->gov_province_id
        );
    }

    public function cities()
    {
        return $this->hasMany(
            GeoCity::class,
            'gov_community_id',
            'gov_id'
        )->where(
            [
                'gov_province_id' => $this->gov_province_id,
                'gov_county_id'   => $this->gov_county_id,
            ]
        );
    }
}