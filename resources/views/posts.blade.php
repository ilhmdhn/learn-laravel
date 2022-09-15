@extends('layouts.main')

@section('container')
    
    @foreach ($posts as $isinya)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $isinya->slug }}">
                {{ $isinya->title}}
            </a>
        </h2>
        <p>{{ $isinya->excerpt}}</p>
    </article>
    @endforeach
@endsection