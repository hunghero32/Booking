<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingAudit extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id',
        'user_id',
        'field_changed',
        'old_value',
        'new_value',
        'notes',
    ];
}
