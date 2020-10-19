@extends('layouts.app')
@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{(!empty($articolo)) ? route('articoli.update',$articolo->id): route('articoli.store')}}" method="post" class="custform">
  @csrf
  @if(!empty($articolo))
      @method('PATCH')
      <input type="hidden" name="id" value="{{ $articolo->id }}" >
    @else
      @method('POST')
  @endif
  {{-- @method('POST') --}}
  <div class="form-group">
    <label for="nome" class="col12">Codice</label>
    <input type="number" name="codice" placeholder="Codice" id='codice' value="{{ (!empty($articolo)) ? $articolo->codice : old('codice') }}">
  </div>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" placeholder="Nome" id='nome' value="{{ (!empty($articolo)) ? $articolo->nome : old('nome') }}">
  </div>
  <div class="form-group">
    <label for="colore">Colore</label>
    <input type="text" name="colore" placeholder="colore" id='colore' value="{{ (!empty($articolo)) ? $articolo->colore : old('colore') }}">
  </div>
  <div class="form-group">
    <label for="genere">Genere</label>
    <input type="text" name="genere" placeholder="genere" id='genere' value="{{ (!empty($articolo)) ? $articolo->genere : old('genere') }}">
  </div>
  <div class="form-group">
    <label for="taglia">Taglia</label>
    <input type="text" name="taglia" placeholder="taglia" id='taglia' value="{{ (!empty($articolo)) ? $articolo->taglia : old('taglia') }}">
  </div>
  <div class="form-group">
    <label for="nome">Quantità</label>
    <input type="number" name="quantità" placeholder="quantità" id='quantità' value="{{ (!empty($articolo)) ? $articolo->quantità : old('quantità') }}">
  </div>
  <div class="form-group">
    <label for="text">Descrizione</label>
    <textarea type="text" name="descrizione" placeholder="descrizione" id='descrizione' value="{{ (!empty($articolo)) ? $articolo->descrizione : old('descrizione') }}"></textarea>
  </div>
  <input type="submit" value="Aggiungi">
  </form>
@endsection
