<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use Session;

class afficheMachine extends Controller
{
     function equipements(){
        $machine = Machine::all()->toArray();
        return view("pages.equipements.equipements",compact('machine'));
     }

    
}
