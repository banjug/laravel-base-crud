@extends('layouts.main-layout')
@section('content')
    <main>
        <h3>{{$comic->author}}</h3>
        <h2>{{$comic->title}}</h2>
        <p>Release: {{$comic->release_date}}</p>
        <p>Pages: {{$comic->pages}}</p>
    </main>
@endsection