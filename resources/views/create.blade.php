@extends('layouts.app')
@section('content')
  <form action="{{route('articoli.store')}}" method="post">
  @csrf
  @method('POST')
  <label for="nome">Codice</label>
  <input type="number" name="codice" placeholder="Codice" id='codice' value="{{ old('codice')}}">
  <label for="nome">Nome</label>
  <input type="text" name="nome" placeholder="Nome" id='nome' value="{{ old('nome')}}">
  <label for="colore">Colore</label>
  <input type="text" name="colore" placeholder="colore" id='colore'>
  <label for="genere">Genere</label>
  <input type="text" name="genere" placeholder="genere" id='genere'>
  <label for="taglia">Taglia</label>
  <input type="text" name="taglia" placeholder="taglia" id='taglia'>
  <label for="nome">Quantità</label>
  <input type="number" name="quantità" placeholder="quantità" id='quantità' value="{{ old('quantità')}}">
  <label for="text">Descrizione</label>
  <textarea type="text" name="descrizione" placeholder="descrizione" id='descrizione'></textarea>

  <input type="submit" value="Invia">
  </form>
@endsection
