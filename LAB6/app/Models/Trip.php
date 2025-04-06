<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trip extends Model
{
    protected $fillable = ['name', 'continent', 'period', 'description', 'price', 'img'];

    protected $attributes = ['period' => 7];

    public $timestamps = true;

    public function country(): BelongsTo {
        return $this->belongsTo(Country::class);
    }
}
