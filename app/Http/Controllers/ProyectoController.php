<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function backHouse(){
        return view('welcome');
    }

    
    public function index(){
        //mostramos todos los registros 
        $registros = Proyecto::all();
        return view('disk.discoIndex',compact('registros'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
      
      return view('disk.discoCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
       //guarda datos del formulario en la DB
       Proyecto::create($request->all());
       return redirect()->route('discos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $disco)
    {
        return view('disk.discoShow',compact('disco'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $disco)
    {
        //regresamos la vista del formulario
        return view('disk.discoCreate',compact('disco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       /* $disco->disco = $request->disco;
        $disco->id = $request->id;
        $disco->save();
      */
    
         $disco = Proyecto::findOrFail($id);
         $disco->update($request->all());


        //redirigir la vista.
        return redirect()->route('discos.show',$disco->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $disco)
    {
        $disco->delete();
        return redirect()->route('discos.index');
    }
} 
