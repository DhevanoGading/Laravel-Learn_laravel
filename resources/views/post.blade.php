@extends('layouts.main')

@section('container')
    <h1>{{ $post["tittle"] }}</h1>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>

    <a href="/posts">Back to Blog</a>
@endsection