@extends('layouts.app')
@section('content')
 {{-- @foreach ($data as $articolo)
   <ul>
     <li> {{ $articolo->nome }}</li>
     <li> {{ $articolo->colore }}</li>
     <li> {{ $articolo->taglia }}</li>
     <li> {{ $articolo->descrizione }}</li>
   </ul> --}}
{{-- @endforeach --}}
   <table class="table table-striped table-dark .table-responsive">
    <thead class="thead-light">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Codice</th>
        <th scope="col">Nome</th>
        <th scope="col">Colore</th>
        <th scope="col">Taglia</th>
        <th scope="col">Quantità</th>
        <th scope="col">Descrizione</th>
        <th scope="col2">
          <a href="{{route('articoli.create')}}" type="button" class="btn btn-outline-success custw">Add Item</a>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $articolo)
      <tr>
        <td>{{ $articolo->id }}</td>
        <td>{{ $articolo->codice }}</td>
        <td>{{ $articolo->nome }}</td>
        <td>{{ $articolo->colore }}</td>
        <td>{{ $articolo->taglia }}</td>
        <td>{{ $articolo->quantità }}</td>
        <td>{{ $articolo->descrizione }}</td>
        <td>
          <a href="{{route('articoli.create')}}" type="button" class="btn btn-secondary" >Edit</a>
          <button type="button" class="btn btn-danger">Delete</button>
          {{-- DELETE INPUT TO FIX --}}
          {{-- <form action="{{ route('articoli.destroy', $articolo->id )}}" method="post" class="form-inline">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete">
          </form> --}}

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
