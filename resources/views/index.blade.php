@extends('layouts.app')
@section('content')
 @foreach ($data as $articolo)
   <ul>
     <li> {{ $articolo->nome }}</li>
     <li> {{ $articolo->colore }}</li>
     <li> {{ $articolo->taglia }}</li>
     <li> {{ $articolo->descrizione }}</li>
   </ul>
 @endforeach
@endsection
