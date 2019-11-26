<?php

namespace App\Http\Controllers;

use App\Famoso;
use App\Disco;
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
        $artistas = Famoso::paginate(7);
        return view('artistas.artistaIndex',compact('artistas'));
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
        
        $request->validate([
          'nombre'=> 'required|string|min:10|max:255',
          'artistico'=> 'required|string|min:10|max:255',
          'nacionalidad' => 'required|string|min:5|max:255',
        ]);

        Famoso::create($request->all());       
        return redirect()->route('famoso.index')->with(['mensaje'=>'Famoso creado con exito','tipo'=>'alert-success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Famoso  $famoso
     * @return \Illuminate\Http\Response
     */
    public function show(Famoso $famoso)
    {
        return view('artistas.artistaShow',compact('famoso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Famoso  $famoso
     * @return \Illuminate\Http\Response
     */
    public function edit(Famoso $famoso)
    {   
        return view('artistas.artistaCreate',compact('famoso'));
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

        $request->validate([
          'nombre'=> 'required|string|min:10|max:255',
          'artistico'=> 'required|string|min:10|max:255',
          'nacionalidad' => 'required|string|min:5|max:255',
        ]);
        
        $famoso->update($request->all());

        return redirect()->route('famoso.show',$famoso->id)->with(['mensaje'=>'Famoso actualizado con exito','tipo'=>'alert-success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Famoso  $famoso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Famoso $famoso)
    {
        $famoso->delete();
        return redirect()->route('famoso.index')->with(['mensaje'=>'Famoso eliminado con exito','tipo'=>'alert-warning']);
    }


    public function listaBorrados(){
        
        $trash = Famoso::onlyTrashed()->get(); // muestra los registros eliminados
        return view('artistas.listDelete',compact('trash'));
    }

    public function restore($id){
       
      Famoso::onlyTrashed()->find($id)->restore();// restauramos registro eliminado logicamente
      return redirect()->route('famoso.index');
    }
}
