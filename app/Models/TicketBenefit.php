<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class TicketBenefit extends Model
{
    protected $guarded=['id'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    public function benefit()
    {
        return $this->belongsTo(Benefit::class);
    }
}
