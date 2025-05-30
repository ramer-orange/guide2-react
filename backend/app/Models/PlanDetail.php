<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanDetail extends Model
{
    /** @use HasFactory<\Database\Factories\PlanDetailFactory> */
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'memo',
        'arrival_time',
        'order',
    ];

    public function planDay()
    {
        return $this->belongsTo(PlanDay::class);
    }
}
