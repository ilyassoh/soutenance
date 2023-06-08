<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class demande extends Model
{
    use HasFactory;

    public function chercheurs():BelongsTo
{
    return $this->belongsTo(chercheur::class,'chercheurs_id');
}

}
