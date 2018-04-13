<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends AbstractModel
{
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'password',
        'province_id',
        'district_id',
        'address',
        'website',
        'career_id',
        'business_license',
        'registration_certificate',
        'brand_id',
        'business_area',
        'registration_certificate',
        'brand_id',
        'business_area',
        'special_product',
        'status'
    ];
}
