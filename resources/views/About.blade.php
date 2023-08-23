@extends('template')
@section('container')
    <h1>tentang saya </h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="user/{{ $image }}" alt="{{ $name }}" width="200px" class="img-tumbnails">
@endsection
