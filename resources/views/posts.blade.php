@extends('layouts.main')

@section('container')
    
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom">
        <h2>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                {{ $post->title}}
            </a>
        </h2>



        <p>By. <a href="/authors/{{ $post->user->username }}"> {{$post->user->name}}</a> in 
            <a href="/categories/{{$post->category->slug}}" 
                class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt}}</p>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More</a>

        <br><br>
        <p>{{$post}}</p>
    </article>
    @endforeach
@endsection