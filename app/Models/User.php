<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use HasFactory;


    public function getIsAdminAttribute()
    {
        return $this->roles->pluck( 'name' )->contains( 'admin' );
    }


}
