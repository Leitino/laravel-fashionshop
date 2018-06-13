@extends('layout')
@section('contenuto')
  <div class="main_container-home">
    @foreach ($products as $prodotto)
      <div class="prodotti">
        <a href="{{route('p1',['id'=>$prodotto['id']])}}"> <img src="{{$prodotto['image']}}" alt=""> </a>
      </div>
    @endforeach

  </div>

@endsection
