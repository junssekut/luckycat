<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    protected $guarded=['id'];

    public function benefits(): HasMany
    {
        return $this->HasMany(Benefit::class);
    }
}
