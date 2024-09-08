<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingPayment extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id',
        'wallet_transaction_id',
        'amount',
        'payment_status',
    ];
}
