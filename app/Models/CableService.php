<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CableService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
    ];

    public $timestamps = false;

    public function packages()
    {
        return $this->hasMany('App\Models\Package');
    }
}
