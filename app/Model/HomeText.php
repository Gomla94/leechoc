<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HomeText extends Model
{
    protected $fillable = [
        'first_title', 'first_brief', 'first_main_text', 'second_title', 'second_main_text', 'third_title', 'fourth_title',
        'working_days', 'working_hours', 'working_days_two', 'working_hours_two'
    ];
}
