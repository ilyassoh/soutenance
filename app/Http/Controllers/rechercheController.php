<?php

namespace App\Http\Controllers;

use App\Models\publication;
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
        $data=publication::all() ;
        return view("pages.recherches.recherches",compact('data'));
       
    }
}