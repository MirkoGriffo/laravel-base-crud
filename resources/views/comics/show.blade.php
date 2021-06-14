@extends('layouts.main')

@section('content')

<div class="container">
    <h1>{{$comic->title}}</h1>
    <div class="mb-5">
        <span class="badge bg-primary">{{$comic->type}}</span> <span class="badge bg-secondary">{{$comic->series}}</span> 
    </div>
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="{{$comic->image}}" alt="">
        </div>
        <div class="col-md-6">
            <h2>Descrizione:</h2>
            <p>{{ $comic->description }}</p>

            <h4 class="badge bg-light text-dark">Data: {{ $comic->sale_date }}</h4>


            <h4 class="mt-5">Prezzo: {{ $comic->price }}$</h4>
        </div>
    </div>
    <p class="mt-5"><a  href="{{route('comics.index')}}">Back to Archive</a></p>
</div>
    
@endsection