<?php

namespace API\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class PreboardingAttendance extends Model
{
    protected $table = "orientation_form_table";
    protected $primaryKey = "app_id";
    public $timestamps = false;

    protected $fillable = [
        'name', 
        'email_address', 
        'phone_number', 
        'facebook_link', 
        'course',
        'school_name',
        'school_contact',
        'hours_requirement',
        'orientation_date',
        'start_date',
        'end_date',
        'status'];

    protected function casts(): array
    {
        return [
            'orientation_date' => 'date:Y-m-d',
            'start_date' => 'date:Y-m-d',
            'end_date' => 'date:Y-m-d',
        ];
    }

    
}