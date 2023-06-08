<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany ;


class secretaire extends Model
{


    use HasFactory;

    public function publication():HasOne
    {
        return $this->hasOne(Publication::class, 'id_secretaire');
    }

    public function demande():HasOne
    {
        return $this->hasOne(demande::class, 'id_secretaire');
    }
}