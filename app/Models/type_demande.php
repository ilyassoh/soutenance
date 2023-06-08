<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class type_demande extends Model
{
    use HasFactory;

    
    /**
     * Get the machine that Belongs to type_demande.
     */
    public function machine(): BelongsTo
    {
        return $this->belongsTo(Machine::class, 'id_machine', 'id');
    }
}
