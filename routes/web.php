<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/prodotti', function () {
  // trasformazione da json ad array
  // verificare che funzioni il json decode
  // dd(json_decode(config('dati.dati_pasta'), true));
  //Assegno ad una variabile l'array verificato prima tramite dd
  $data = json_decode(config('dati.dati_pasta'), true);

  // array filter per dividere l'array in tre array filtrati dal tipo di pasta. Basta fare una funzione con un nome per la variabile tra parentesi e poi il foreach sarà automatico.
  $pasta_lunga = array_filter($data , function($tipo_pasta){
    return $tipo_pasta['tipo'] == "lunga";
  });

  $pasta_corta = array_filter($data , function($tipo_pasta){
    return $tipo_pasta['tipo'] == "corta";
  });

  $pasta_cortissima = array_filter($data , function($tipo_pasta){
    return $tipo_pasta['tipo'] == "cortissima";
  });

  // Riunisco tutti gli array in un unico array che abbia tre chiavi a dividere la pasta in base al tipo

  $paste = [
    'le lunghe' => $pasta_lunga,
    'le corte' => $pasta_corta,
    'le cortissime' => $pasta_cortissima
  ];
    return view('prodotti', compact('paste'));
})->name('prodotti');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');
