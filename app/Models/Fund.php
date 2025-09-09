<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function investments()
    {
        return $this->hasMany(Investment::class);
    }

    public function funds()
    {
        return $this->hasMany(Fund::class);
    }
}
