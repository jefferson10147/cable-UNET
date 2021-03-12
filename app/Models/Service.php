<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'internet_service_id',
        'phone_service_id',
        'cable_service_id',
        'price',
    ];

    public $timestamps = false;
}
