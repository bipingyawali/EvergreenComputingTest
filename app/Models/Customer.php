<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_name',
        'first_name',
        'last_name',
        'phone_number',
        'house_number',
        'street',
        'town',
        'county',
        'postcode',
        'country',
        'latitude',
        'longitude',
        'added_by'
    ];

    /**
     * Perform any actions required after the model boots.
     *
     * @return void
     */
    protected static function booted()
    {
         static::creating(function ($customer) {
             $customer->added_by = (auth()->check()) ?  auth()->user()->id : null;
         });
    }
}
