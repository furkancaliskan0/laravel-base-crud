@extends('layouts.main-layout')

@section('content')
    
    <h1>SAINTS</h1>
    <ul>
        @foreach ($saints as $saint)
         
        <li>
            <a href="saint/{{ $saint -> id }}">
            {{$saint -> nome }} - {{$saint -> numero_miracoli }}
            </a>
        </li>
            
        @endforeach
    </ul>



@endsection