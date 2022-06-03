@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->tittle }}</h1>

    {!! $post->body !!}

    <a href="/posts">Back to Blog</a>
@endsection