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

    public function internetService()
    {
        return $this->belongsTo('App\Models\InternetService');
    }

    public function phoneService()
    {
        return $this->belongsTo('App\Models\PhoneService');
    }

    public function cableService()
    {
        return $this->belongsTo('App\Models\CableService');
    }
}
