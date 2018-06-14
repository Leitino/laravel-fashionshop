<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class leitaController extends Controller
{

public function homepage(){
  $products = product::all();

  return view('homepage',['products'=>$products]);
}
public function prodotto($idprodotto){

  $prodottovisionato = product::where('id', $idprodotto)->first();

  if ($prodottovisionato == null)
    abort(404);

  return view('prodotto_dettaglio', ['prodotto'=>$prodottovisionato]);
}
}
