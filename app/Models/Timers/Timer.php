<?php

namespace App\Models\Timers;

use Illuminate\Database\Eloquent\Model;

class Timer extends Model
{
    // Table Name
    protected $table = 'timer';

    //Timestamps
    public $timestamps = true;

    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'type',
        'stage',
        'region',
        'system',
        'planet',
        'moon',
        'owner',
        'owner_id',
        'eveTime',
        'notes',
        'character_id',
    ];
}