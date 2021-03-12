<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'plan_limit',
        'price',
    ];

    public $timestamps = false;

    public function services()
    {
        return $this->hasMany('App\Models\Service');
    }
}
