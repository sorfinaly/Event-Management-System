<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_name',
        'priced_event',
        'fee',
        'event_date',
        'location',
        'start_time',
        'end_time',
        'event_category',
        'event_format',
        'event_description',
        'event_email',
        'event_img',
    ];
}
