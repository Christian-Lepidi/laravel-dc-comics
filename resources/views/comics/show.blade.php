@extends('layouts.app')

@section('title', "Comic $comic->id: $comic->title" )

@section('main-content')
<section>
    <div class="container py-4">
      <a class="btn btn-primary mb-3" href="{{route('comics.index')}}">Torna alla lista</a>
      <h1 class="text-center">Dettagli comic{{$comic->id}}:{{$comic->title}}</h1>
      <div class="row">
        <div class="col-5">
         <img src="{{$comic->image}}" class="img-fluid" alt="">   
        </div>
        <div class="col-7">
          <h2 class="h4 text-center">Descrizione</h2> 
          <p>{{$comic->description}}</p> 
          <div class="row">
            <div class="col-6">
                <h2 class="h4 text-center">Prezzo</h2> 
                <div class="text-center">{{$comic->price}}</div> 
            </div>
            <div class="col-6">
                <h2 class="h4 text-center">Serie</h2>
                <div class="text-center">{{$comic->series}}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section> 
@endsection     