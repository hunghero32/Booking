<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id',
        'item_type',
        'item_name',
        'quantity',
        'price',
        'total',
    ];
}
