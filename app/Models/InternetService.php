<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternetService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'speed',
        'price',
    ];

    public $timestamps = false;

    public function services()
    {
        return $this->hasMany('App\Models\Service');
    }
}
