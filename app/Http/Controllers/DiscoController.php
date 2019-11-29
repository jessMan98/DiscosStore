<?php

namespace App\Http\Controllers;

use App\Disco;
use App\Discografica;
use App\Famoso;
use Illuminate\Http\Request;

class DiscoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function catalogoDisco(){
       $catalogo = Disco::with('discografica','famosos')->get();
       return view('Catalogo.catalogoIndex',compact('catalogo'));

    }

    public function index()
    {
       $registros = Disco::with('discografica','famosos')->get();
       return view('disk.discoIndex',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disquera = Discografica::pluck('nDisquera','id');
        $artistas = Famoso::pluck('artistico','id');
        return view('disk.discoCreate',compact('disquera','artistas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Disco::create($request->all());
        $request->validate([
         'genero'=> 'required|string|min:3|max:255',
         'año'=> 'required|integer|min:4',
         'album'=> 'required|string|min:3|max:255',
         'formato'=> 'required|string|min:6|max:255',
        ]);
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName(); //fecha actual con nombre del archivo
            $file->move(public_path().'/archivos/',$name); // asignamos la direccion y creamos carpeta
        }        


        $disco = new Disco([
          'imagen'=> $name,
          'genero'=> $request->genero,
          'año'=> $request->año,
          'album'=> $request->album,
          'formato'=> $request->formato,  
        ]);
        //$disco->save();
        $discografica = Discografica::find($request->discografica_id);
        $discografica->discos()->save($disco);

        $disco->famosos()->attach($request->famoso_id);

     
        return redirect()->route('discos.index')->with(['mensaje' => 'Disco creado con exito :D', 'tipo' => 'alert-success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function show(Disco $disco)
    {
        return view('disk.discoShow',compact('disco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function edit(Disco $disco)
    {   

        $disquera = Discografica::pluck('nDisquera','id');
        $artistas = Famoso::pluck('artistico','id');

        return view('disk.discoCreate',compact('disquera','disco','artistas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disco $disco)
    {
        $request->validate([
         'genero'=> 'required|string|min:3|max:255',
         'año'=> 'required|integer|min:4',
         'album'=> 'required|string|min:3|max:255',
         'formato'=> 'required|string|min:7|max:255',
        ]);
        
        $disco->update($request->all());
        $disco->famosos()->sync($request->famoso_id);

        return redirect()->route('discos.show',$disco->id)->with(['mensaje' => 'Disco actualizado con exito','tipo' => 'alert-success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disco  $disco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disco $disco)
    {
        $disco->delete();
        return redirect()->route('discos.index')->with(['mensaje'=> 'Disco eliminado con exito :D', 'tipo' => 'alert-warning']);
    }

    public function returnJson(){
        $disco = Disco::get()->toJson();
        return $disco;

    }
}
