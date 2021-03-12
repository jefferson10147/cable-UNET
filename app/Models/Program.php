<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'channel_id',
        'date',
        'program_name',
        'starts_at',
        'ends_at'
    ];

    public $timestamps = false;

    public function channel()
    {
        return $this->belongsTo('App\Models\Channel');
    }
}
