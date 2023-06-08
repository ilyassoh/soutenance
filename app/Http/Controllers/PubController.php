<?php

namespace App\Http\Controllers;

use App\Models\pub;
use App\Http\Requests\StorepubRequest;
use App\Http\Requests\UpdatepubRequest;


class PubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=pub::all() ;
        return view("pages.actualite.actualite",compact('data'));
        //return view('pages.actualite.actualite')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepubRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepubRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function show(pub $pub)
    {
        $data=pub::all() ;
        return view("pages.actualite.actualite",compact('data'));
        //return view('pages.actualite.actualite')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function edit(pub $pub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepubRequest  $request
     * @param  \App\Models\pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepubRequest $request, pub $pub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function destroy(pub $pub)
    {
        //
    }
}
