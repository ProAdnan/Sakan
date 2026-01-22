<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
        'owner_id',
        'name',
        'location',
        'latitude',
        'longitude',
        'area',
        'university_id',
        'allowed_gender',
        'description',
        'rent_type',
        'price',
        'status',          // Add this
        'number_of_rooms',


    ];



    // Inside Apartment class
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function images()
    {
        return $this->hasMany(ApartmentImage::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'apartment_features');
    }



}
