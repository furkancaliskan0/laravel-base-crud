@extends('layouts.main-layout')

@section('content')
    
    <h1>CREATE NEW SAINT</h1>
    <form method="POST" action="{{ route('saint.store') }}">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <br>
        <label for="data_benedizione">Data di benedizione</label>
        <input type="text" name="data_benedizione">
        <br>
        <label for="luogo_di_nascita">Luogo di nascita</label>
        <input type="date" name="luogo_di_nascita">
        <br>
        <label for="numero_miracoli">Numero di  miracoli</label>
        <input type="text" name="numero_miracoli">
       
        <br>
        <input type="submit" value="CREATE NEW SAINT">
    </form>

@endsection