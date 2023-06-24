<?php

namespace App\Http\Controllers;
use App\Models\publication;
use App\Models\Machine;
use App\Models\User;
use App\Models\parametre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
Use App\Mail\recevoirMailer;

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


    public function apropos(){
        $machines = Machine::all();
        $users = User::whereIn('role_id', [1, 4, 5])->get();
        return view('pages.apropos.apropos', compact('users','machines'));
    }


    public function contact(){
        $parametres = parametre::all();
        return view('pages.contact.contact', compact('parametres'));
    }

    public function recevoirEmail(Request $request){
        $parametres = parametre::all();
        Mail::to($parametres[0]['Contact_email'])->send(new recevoirMailer($request->email,$request->phone,$request->name,$request->message));
        return back()->with('success','Message envoyé avec succès');
    }


}

