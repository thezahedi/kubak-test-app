<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Location extends Model
{
    protected $fillable = [
        'lat',
        'lng',
    ];

    public static function getLocations($lat, $lng, $limit)
    {
        $get = DB::select("SELECT *, ((ACOS(SIN($lat * PI() / 180) * SIN(lat * PI() / 180) + COS($lat * PI() / 180) * COS(lat * PI() / 180) * COS(($lng - lng) * PI() / 180)) * 180 / PI()) * 60 * 1.1515 * 1.609344) as distance FROM locations WHERE lat != '0.0' AND lng != '0.0' ORDER BY distance ASC LIMIT $limit");

        return $get;
    }
}
