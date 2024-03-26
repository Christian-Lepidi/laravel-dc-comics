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
              <button type="button" class="btn btn-danger my-2" data-bs-toggle="modal" data-bs-target="#delete-comic-{{$comic->id}}-modal">
                Elimina
              </button>
              <div class="modal fade" id="delete-comic-{{$comic->id}}-modal" tabindex="-1" aria-labelledby="delete-comic-{{$comic->id}}-modal" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina {{$comic->title}}</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Operazione irreversibile. Sicuro di voler proseguire?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Indietro</button>
                      <form action="{{route('comics.destroy', $comic)}}" method="POST">
                        @csrf
                        @method('DELETE') 
                        <button class="btn btn-danger">Conferma Eliminazione</button>
                       </form>
                    </div>
                  </div>
                </div>
              </div>
              
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