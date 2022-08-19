@extends('layout.main')
@section('title', 'home')
@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <p>{{$exception->getMessage()}}</p>
</div>
@endsection
