<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'sector_id',
        'course_level_id',
        'course_title_id',
        'first_name',
        'last_name',
        'photo',
        'qualification',
        'experience_status',
        'company_name',
        'job_title',
        'gender',
        'year_of_experience',
        'address_line_1',
        'city',
        'zip_code',
        'address_line_2',
        'state',
        'country',
        'address_status',
        'permanent_address_line_1',
        'permanent_city',
        'permanent_zip_code',
        'permanent_address_line_2',
        'permanent_state',
        'permanent_country',
        'primary_mobile_number',
        'primary_email',
        'secondary_mobile_number',
        'secondary_email',
        'job_description',
        'training_session',
        'expectations',
        'payment_response', 'payment_id', 'signature', 'date', 'time', 'print_name', 'place'
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

    public function course_level()
    {
        return $this->belongsTo(CourseLevel::class);
    }

    public function course_title()
    {
        return $this->belongsTo(CourseTitle::class);
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
            get: fn (mixed $value, array $attributes) => City::find($attributes['permanent_city'])->name ?? null
        );
    }

    public function permanentStateName(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => State::find($attributes['permanent_state'])->name ?? null
        );
    }

    public function permanentCountryName(): Attribute
    {
        return Attribute::make(
            get: fn(mixed $value, array $attributes) => Country::find($attributes['permanent_country'])->name ?? null
        );
    }
}
