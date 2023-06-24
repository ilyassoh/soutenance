<?php

namespace App\Http\Controllers;

use App\Models\recherche;
use App\Models\chercheur;
use App\Http\Requests\StorepubRequest;
use App\Http\Requests\UpdatepubRequest;


class rechercheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recherches=recherche::all();
        $chercheurs=chercheur::all();
        return view("pages.recherches.recherches",compact('recherches','chercheurs'));
       
    }
}