@extends('layouts.app')
@section('content')
  {{-- @dd($articolo) --}}

  <form class="custform">
  <div class="form-group">
    <label for="nome" class="col12">Codice</label>
    <input type="number" name="codice" placeholder="Codice" id='codice' value="{{ $articolo->codice }}">
  </div>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" placeholder="Nome" id='nome' value="{{$articolo->nome }}">
  </div>
  <div class="form-group">
    <label for="colore">Colore</label>
    <input type="text" name="colore" placeholder="colore" id='colore' value="{{ $articolo->colore }}">
  </div>
  <div class="form-group">
    <label for="genere">Genere</label>
    <input type="text" name="genere" placeholder="genere" id='genere' value="{{  $articolo->genere  }}">
  </div>
  <div class="form-group">
    <label for="taglia">Taglia</label>
    <input type="text" name="taglia" placeholder="taglia" id='taglia' value="{{  $articolo->taglia }}">
  </div>
  <div class="form-group">
    <label for="nome">Quantità</label>
    <input type="number" name="quantità" placeholder="quantità" id='quantità' value="{{  $articolo->quantità  }}">
  </div>
  <div class="form-group">
    <label for="text">Descrizione</label>
    <textarea type="text" name="descrizione" placeholder="descrizione" id='descrizione' value="{{  $articolo->descrizione }}"></textarea>
  </div>
  <input type="submit" value="Aggiungi">
  </form>
@endsection
