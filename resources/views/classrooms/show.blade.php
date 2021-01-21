@extends('layout.main')

@section('content')
    <div class="container mb-5">
        <h1>{{ $classroom->name }} Details</h1>
        <h6>ID {{ $classroom->id }} </h6>
        <hr>
        <p>{{ $classroom->description }}</p>

        <div class="mb-3">created at: {{ $classroom->created_at }}</div>
        <div class="mb-3">updated at: {{ $classroom->updated_at }}</div>
    </div>
@endsection