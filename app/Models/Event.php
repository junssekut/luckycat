<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded=['id'];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
    public function vendor(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
