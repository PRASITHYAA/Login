<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_application_id',
        'identity_type',
        'aadhar_name',
        'aadhar_id_number',
        'aadhar_issued_country',
        'aadhar_issued_state',
        'aadhar_issued_place',
        'aadhar_image',
        'aadhar_image_page',
        //passport
        'passport_name',
        'passport_id_number',
        'passport_issue_date',
        'passport_expired_date',
        'passport_issued_country',
        'passport_issued_state',
        'passport_issued_place',
        'passport_image_id',
        'passport_image_id_page',
    ];

    protected $appends = ['aadhar_issued_place_name', 'aadhar_issued_state_name', 'aadhar_issued_country_name', 'passport_issued_place_name', 'passport_issued_state_name', 'passport_issued_country_name'];

    public function jobApplication()
    {
        return $this->belongsTo(JobApplication::class);
    }

    public function aadharIssuedPlaceName(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => City::find($attributes['aadhar_issued_place'])->name
        );
    }

    public function aadharIssuedStateName(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => State::find($attributes['aadhar_issued_state'])->name
        );
    }

    public function aadharIssuedCountryName(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => Country::find($attributes['aadhar_issued_country'])->name
        );
    }

    public function passportIssuedPlaceName(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => City::find($attributes['passport_issued_place'])->name ?? ''
        );
    }

    public function passportIssuedStateName(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => State::find($attributes['passport_issued_state'])->name ?? ''
        );
    }

    public function passportIssuedCountryName(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => Country::find($attributes['passport_issued_country'])->name ?? ''
        );
    }
}
