@extends('layouts.main')

@section('container')
    
    @foreach ($posts as $post)
    <h1 class="mb-5">Post Category : {{ $category }}</h1>
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        {{-- <h5>By: {{ $post["author"] }}</h5> --}}
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach

@endsection

