<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_ins extends Model
{
    protected $fillable = [
        'name',
        'tel',
        'car_brand_id',
        'car_model_id',
        'booking_date',
        'booking_time',
        'booking_status',
        'note',
        'note_admin',
        'status',
      ];
      protected $table = 'booking_ins';

      public $timestamps = false;
}
