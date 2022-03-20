<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('evento/indexEvento', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evento/formEvento');
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
            'nombre'=>'required|min:5|max:50',
            'lugar'=>'required|min:5|max:20',
            'grupo'=>'required|min:3|max:20',
            'descripcion'=>'required|min:5|max:30',
        ]);

        $evento = new Evento();
        $evento->nombre = $request->nombre;
        $evento->lugar = $request->lugar;
        $evento->grupo = $request->grupo;
        $evento->descripcion = $request->descripcion;
        $evento->save();

        return redirect('/evento');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return view('evento/showEvento', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        return view('evento/formEvento', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'nombre'=>'required|min:5|max:50',
            'lugar'=>'required|min:5|max:20',
            'grupo'=>'required|min:3|max:20',
            'descripcion'=>'required|min:5|max:30',
        ]);

        $evento->nombre = $request->nombre;
        $evento->lugar = $request->lugar;
        $evento->grupo = $request->grupo;
        $evento->descripcion = $request->descripcion;
        $evento->save();

        return redirect('/evento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect('/evento');
    }
}
