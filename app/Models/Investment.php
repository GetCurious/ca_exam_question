<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'start_date',
        'capital_amount',
        'status',
        'fund_id',
        'investor_id',
    ];

    protected $casts = [
        'uid' => 'string',
        'start_date' => 'date',
        'capital_amount' => 'decimal:2',
    ];

    public function fund()
    {
        return $this->belongsTo(Fund::class);
    }

    public function investor()
    {
        return $this->belongsTo(Investor::class);
    }
}
