<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articolo;

class ArticoloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //prendo tutti i dati usando il model
        $data = Articolo::all();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ( empty($data['codice']) || empty($data['nome']) || empty($data['quantità']) )  {
          return back()->withInput();
        }
        $articoloNew = new Articolo;
        $articoloNew->codice = $data['codice'];
        $articoloNew->nome = $data['nome'];
        $articoloNew->genere = $data['genere'];
        $articoloNew->colore = $data['colore'];
        $articoloNew->quantità = $data['quantità'];
        $articoloNew->taglia = $data['taglia'];
        $articoloNew->descrizione = $data['descrizione'];
        $saved = $articoloNew->save();
        dd($saved);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
