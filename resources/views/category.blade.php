@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category: {{$category}}</h1>
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