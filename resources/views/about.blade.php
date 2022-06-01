@extends('layouts.main')

@section('container')
    <h1>Biodata</h1>
    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
    <img src="{{ $image }}" alt="{{ $name }}" width="200" class="img-tumbnail rounded-circle">
@endsection