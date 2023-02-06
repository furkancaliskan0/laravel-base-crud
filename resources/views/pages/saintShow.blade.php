@extends('layouts.main-layout')

@section('content')
  
            <h1>Nome: {{ $saint -> nome }}  </h1>
            <h2>Luogo Di Nascina: {{ $saint -> luogo_di_nascita }}</h2>
            <h2>Data di Benedizione: {{ $saint -> data_benedizione }}</h2>
            <h2>Numero di Miracoli: {{ $saint -> numero_miracoli }}</h2>
@endsection