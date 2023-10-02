<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class JobApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'sector_id',
        'position_id',
        'first_name',
        'last_name',
        'image',
        'dob',
        'age',
        'country',
        'state',
        'city',
        'address',
        'postal_code',
        'phone',
        'alternative_phone',
        'email',
        'fb_link',
        'instagram_link',
        'linked_link',
        //permanent address
        'permanent_address_input',
        'permanent_city',
        'permanent_postal_code',
        'permanent_phone',
        'permanent_country',
        'permanent_address',
        'permanent_state',
        // father
        'father_name',
        'father_date_of_birth',
        'father_phone',
        'father_image',
        // mother
        'mother_name',
        'mother_date_of_birth',
        'mother_phone',
        'mother_image',
        // marital status
        'marital_status',
        'spouse_name',
        'spouse_date_of_birth',
        'spouse_email',
        'spouse_phone',
        'spouse_image',
        // Siblings
        'siblings'
    ];

    protected $appends = ['city_name', 'state_name', 'country_name', 'permanent_city_name', 'permanent_state_name', 'permanent_country_name'];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function cards()
    {
        return $this->hasMany(Card::class);
    }
    public function educations()
    {
        return $this->hasMany(Education::class);
    }

    public function employments()
    {
        return $this->hasMany(Employment::class);
    }

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }

    public function disclaimers()
    {
        return $this->hasMany(Disclaimer::class);
    }

    public function siblingsList()
    {
        return $this->hasMany(Sibling::class);
    }

    public function cityName(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => City::find($attributes['city'])->name
        );
    }

    public function stateName(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => State::find($attributes['state'])->name
        );
    }

    public function countryName(): Attribute
    {
        return Attribute::make(
          get: fn(mixed $value, array $attributes) => Country::find($attributes['country'])->name
        );
    }

    public function permanentCityName(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => City::find($attributes['permanent_city'])->name ?? ''
        );
    }

    public function permanentStateName(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => State::find($attributes['permanent_state'])->name ?? ''
        );
    }

    public function permanentCountryName(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => Country::find($attributes['permanent_country'])->name ?? ''
        );
    }
}
