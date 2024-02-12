@extends('layouts.main-layout')
@section('head')
    <title>Laravel Movie Database</title>
@endsection
@section('content')
<div id="background_title">
    <h1>Pagina Film</h1>
</div>
    <ul>
        @foreach ($movies as $movie)
        <li>
            <strong>Titolo: </strong>{{ $movie -> title}} <br>
            <strong>Titolo Originale: </strong>{{ $movie -> original_title}} <br>
            <strong>Nazionalit&agrave;: </strong>{{ $movie -> nationality}} <br>
            <strong>Data: </strong>{{ $movie -> date}} <br>
            <strong>Voto: </strong>{{ $movie -> vote}} 
        </li>
            
        @endforeach
    </ul>
@endsection
