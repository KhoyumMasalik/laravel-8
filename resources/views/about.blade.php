@extends('layouts.main')

@section('content')
<h1>Halaman about</h1>
<h2>{{ $name }}</h2>
<h5>{{ $email }}</h5>
<img src="img/{{ $img }}" alt="{{ $name }}" width="200">
@endsection
