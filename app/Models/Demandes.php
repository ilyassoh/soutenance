<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandes extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'date_choix',
        'type_analyse',
        'statu',
        'rapport',
        'id_chercheur',
        'id_secretaire',
        'id_type_demande',
    ];
}
