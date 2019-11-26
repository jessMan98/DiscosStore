<?php

namespace App\Http\Controllers;

use App\Discografica;
use Illuminate\Http\Request;

class DiscograficaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disquera = Discografica::paginate(6);
        return view('discographic.disIndex',compact('disquera'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('discographic.disCreate');
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
          'nDisquera'=> 'required|string|min:5|max:100',
       ]);

        Discografica::create($request->all());
        return redirect()->route('discografica.index')
                         ->with(['mensaje'=> 'Discografica creada con exito :D', 'tipo'=> 'alert-success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discografica  $discografica
     * @return \Illuminate\Http\Response
     */
    public function show(Discografica $discografica)
    {
        return view('discographic.disShow',compact('discografica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discografica  $discografica
     * @return \Illuminate\Http\Response
     */
    public function edit(Discografica $discografica)
    {
        return view('discographic.disCreate',compact('discografica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discografica  $discografica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discografica $discografica)
    {   

        $request->validate([
          'nDisquera'=> 'required|string|min:5|max:100',
       ]);

        $discografica->update($request->all());
        return redirect()->route('discografica.show',$discografica->id)->with(['mensaje'=> 'Discografica actualizada ', 'tipo'=> 'alert-success']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discografica  $discografica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discografica $discografica)
    {
        $discografica->delete();
        return redirect()->route('discografica.index')->with(['mensaje'=> 'Discografica eliminada con exito :D', 'tipo'=> 'alert-warning']);;
    }
}
