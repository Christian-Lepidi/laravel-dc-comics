@extends('layouts.app')

@section('title', 'Modifica '. $comic->title)

@section('main-content')
  <section>
    <div class="container py-4">
        <a class="btn btn-primary mb-3" href="{{route('comics.index')}}">Torna alla lista</a>  
      <h1 class="text-center">Modifica {{$comic->title}}</h1>
      <form action="{{route('comics.update', $comic)}}" class="row g-3" method="POST">
       @csrf
       @method('PATCH')
       
        <div class="col-4">
         <label for="title" class="form-label">Titolo</label>   
         <input value="{{$comic->title}}" type="text" name="title" id="title" class="form-control" required>
        </div> 
        <div class="col-4"> 
         <label for="type" class="form-label">Tipologia</label>    
         <input value="{{$comic->type}}" type="text" name="type" id="type" class="form-control" required>
        </div>
        <div class="col-4">
         <label for="image" class="form-label">Copertina</label>      
         <input value="{{$comic->image}}" type="url" name="image" id="image" class="form-control" required>
        </div>
        <div class="col-4">
         <label for="price" class="form-label">Prezzo</label>      
         <input value="{{$comic->price}}" type="text" name="price" id="price" class="form-control" required>
        </div> 
        <div class="col-4">
         <label for="series" class="form-label">Serie</label>     
         <input value="{{$comic->series}}" type="text" name="series" id="series" class="form-control" required>
        </div> 
        <div class="col-4">
           <label for="sale_date" class="form-label">Data di pubblicazione</label>   
           <input value="{{$comic->sale_date}}" type="text" name="sale_date" id="sale_date" class="form-control" required>
        </div>
        <div class="col-12"> 
           <label for="description" class="form-label">Descrizione</label>   
           <textarea type="text" name="description" id="description" class="form-control" rows="5" required>{{$comic->description}}</textarea>
        </div>
        <div class="col-3">   
         <button class="btn btn-success">Salva</button>
        </div>
      </form>
    </div>
  </section>
@endsection