<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class demande extends Model
{
<<<<<<< Updated upstream
    
    use HasFactory;

    public function secretaire():BelongsTo
    {
        return $this->belongsTo(Secretaire::class, 'id_secretaire', 'id');
    }
=======
    use HasFactory;

    public function chercheurs():BelongsTo
{
    return $this->belongsTo(chercheur::class,'chercheurs_id');
}

>>>>>>> Stashed changes
}
