@extends('layouts.app')

@section('title', 'Comics')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1 class="text-center">Lista Comics</h1>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titolo</th>
            <th>Descrizione</th>
            <th>Prezzo</th>
            <th>Serie</th>
            <th>Data d'uscita</th>
            <th>Tipologia</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @forelse ($comics as $comic)
          <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td>
              <a href="{{route('comics.show', $comic)}}">Dettagli</a>
              <a href="{{route('comics.edit', $comic)}}">Modifica</a>
            </td>
          </tr>  
          @empty
          <tr>
           <td colspan="100%">
            Nessun risultato
           </td> 
          </tr>    
          @endforelse
          

          
        </tbody>
      </table>
    </div>
  </section>
@endsection