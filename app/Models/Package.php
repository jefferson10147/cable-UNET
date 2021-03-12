<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'cable_service_id',
        'channel_id',
    ];

    public $timestamps = false;

    public function cableService()
    {
        return $this->belongsTo('App\Models\CableService');
    }

    public function channel()
    {
        return $this->belongsTo('App\Models\Channel');
    }
}
