<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_type_id',
        'provider_id',
        'name',
        'description',
        'price',
        'location',
        'capacity',
        'is_active',
    ];
}
