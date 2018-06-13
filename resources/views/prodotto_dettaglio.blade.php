@extends('layout')
@section('contenuto')
  <div class="main_container-prodotto">
    <div class="prodotto">
      <div class="prodotto_img">
        <img src="{{$prodotto['image']}}" alt="">

      </div>


    </div>
    <div class="dettagli">
      <h1>{{$prodotto['name']}}</h1>
      <h2>{{$prodotto['brand']}}</h2>
      <p>{{$prodotto['description']}}</p>
      <h3>{{$prodotto['price']}}€</h3>
    </div>
  </div>

@endsection
