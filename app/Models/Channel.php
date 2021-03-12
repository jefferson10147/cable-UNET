<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public $timestamps = false;

    public function programs()
    {
        return $this->hasMany('App\Models\Program');
    }

    public function packages()
    {
        return $this->hasMany('App\Models\Package');
    }
}
