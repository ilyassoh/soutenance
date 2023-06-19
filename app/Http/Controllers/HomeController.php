<?php

namespace App\Http\Controllers;
use App\Models\publication;
use App\Models\Machine;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $data1=publication::all() ;
        $data2=Machine::all() ;
        return view("index",compact('data1','data2'));
    }

    public function machineDetails($idMachine){
        $machine = Machine::where('id','=',$idMachine)->first();
        return view('pages.equipements.machine-details', compact('machine'));
    }


    public function mediaDetails($idMedia){
        $m = publication::where('id','=',$idMedia)->first();
        return view('pages.media.media-details', compact('m'));
    }
}

