<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Benefit extends Model
{
    protected $guarded=['id'];

    public function tickets(): BelongsTo
    {
        return $this->BelongsTo(Ticket::class);
    }
}
