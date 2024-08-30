<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_id',
        'address_id',
        'start_date',
        'end_date',
        'status',
        'total_price',
        'payment_status',
    ];
}
