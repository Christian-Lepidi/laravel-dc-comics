@extends('layouts.app')

@section('title', 'Inserisci nuovo comic')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1 class="text-center">Inserisci nuovo comic</h1>
      <form action="{{route('comics.store')}}" class="row g-3" method="POST">
       @csrf
       
        <div class="col-4">
         <label for="title" class="form-label">Titolo</label>   
         <input type="text" name="title" id="title" class="form-control">
        </div> 
        <div class="col-4"> 
         <label for="type" class="form-label">Tipologia</label>    
         <input type="text" name="type" id="type" class="form-control">
        </div>
        <div class="col-4">
         <label for="image" class="form-label">Copertina</label>      
         <input type="url" name="image" id="image" class="form-control">
        </div>
        <div class="col-4">
         <label for="price" class="form-label">Prezzo</label>      
         <input type="number" step="0.01" name="price" id="price" class="form-control">
        </div> 
        <div class="col-4">
         <label for="series" class="form-label">Serie</label>     
         <input type="text" name="series" id="series" class="form-control">
        </div> 
        <div class="col-4">
           <label for="sale_date" class="form-label">Data di pubblicazione</label>   
           <input type="text" name="sale_date" id="sale_date" class="form-control">
        </div>
        <div class="col-12"> 
           <label for="description" class="form-label">Descrizione</label>   
           <textarea type="text" name="description" id="description" class="form-control" rows="5"></textarea>
        </div>
        <div class="col-3">   
         <button class="btn btn-success">Salva</button>
        </div>
      </form>
    </div>
  </section>
@endsection