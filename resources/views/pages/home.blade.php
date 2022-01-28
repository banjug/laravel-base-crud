@extends('layouts.main-layout')
@section('content')
    <main>
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <a href="{{route('show', $comic->id)}}">
                        {{$comic->title}}
                    </a>
                    - {{$comic->author}}
                </li>
            @endforeach
        </ul>
    </main>
@endsection