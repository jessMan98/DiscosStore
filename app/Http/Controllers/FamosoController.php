<?php

namespace App\Http\Controllers;

use App\Famoso;
use Illuminate\Http\Request;

class FamosoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artistas.artistaCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Famoso::create($request->all());
        return redirect()->route('famoso.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Famoso  $famoso
     * @return \Illuminate\Http\Response
     */
    public function show(Famoso $famoso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Famoso  $famoso
     * @return \Illuminate\Http\Response
     */
    public function edit(Famoso $famoso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Famoso  $famoso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Famoso $famoso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Famoso  $famoso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Famoso $famoso)
    {
        //
    }
}
