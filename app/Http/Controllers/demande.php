<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class demande extends Controller
{
    public function index()
    {
        // Get the currently authenticated user...
        $user = Auth::user();
        $id = Auth::id();

        dd($user->role['display_name']);

        $demande = demande::where('3', $user)->get();
        return view('vendor.voyager.demandest.browse', compact('demandest'));
    }
}
