<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function benefits(): HasMany
    {
        return $this->hasMany(Benefit::class);
    }
}
