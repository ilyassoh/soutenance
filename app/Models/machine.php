<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class machine extends Model
{
    use HasFactory;

     /**
     * Get the type_demande that hasOne machine .
     */
    public function type_demande(): HasOne
    {
        return $this->hasOne(type_demande::class, 'id_machine');
    }

}
