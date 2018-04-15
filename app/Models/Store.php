<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Store extends Authenticatable
{
    const ACTIVE     = 1;
    const NOT_ACTIVE = 0;
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
        'special_product',
        'status'
    ];
    public function getFieldList()
    {
        return $this->fillable;
    }
}
