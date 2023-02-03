@extends('layouts.main-layout')

@section('content')
  
    <ul>
        <li>
            <h1>Nome: {{ $saint -> nome }}  </h1>
        </li>
        <li>
            <h2>Numero di Miracoli: {{ $saint -> numero_miracoli }}</h2>
        </li>
        <li>
            <h2>Luogo Di Nascina: {{ $saint -> luogo_di_nascita }}</h2>
        </li>
        <li>
            <h2>Data di Benedizione: {{ $saint -> data_benedizione }}</h2>
        </li>
    </ul>

@endsection