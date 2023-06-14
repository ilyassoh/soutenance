<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class machine extends Model
{


    use HasFactory;

    public function type_demandes()
    {
        return $this->hasMany(type_demande::class);
    }
    
}
