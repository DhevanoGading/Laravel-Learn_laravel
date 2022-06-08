@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->tittle }}</h1>

    <p>By. Dhevano in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/posts">Back to Blog</a>
@endsection