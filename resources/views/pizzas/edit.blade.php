@extends('layout.main')
@section('title', 'Modifica')
@section('content')
<div class="container">

    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
      </div>
    @endif

    <h1>Modifica: {{$pizza->nome}}</h1>
    {{-- Nel form inserisco "action=" " e method="POST" --}}
    <form action="{{route('pizzas.update', $pizza)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="nome" class="form-label">Pizza</label>
          <input type="text" class="form-control @error('nome') is-invalid @enderror" id="name" name="nome" value="{{$pizza->nome}}">

          @error('nome')
            <p class="error-msg">{{$message}}</p>
          @enderror

        </div>
        <div class="mb-3">
          <label for="prezzo" class="form-label">Prezzo</label>
          <input type="text" class="form-control @error('prezzo') is-invalid @enderror" id="prezzo" name="prezzo" value="{{$pizza->prezzo}}">

          @error('prezzo')
            <p class="error-msg">{{$message}}</p>
          @enderror


        </div>
        <select class="form-select my-2" name="vegetariana" aria-label=".form-select-lg example">
            <option value="1">Vegetariana</option>
            <option value="0">-</option>
        </select>
        <button type="submit" class="btn btn-primary">Modifica</button>
      </form>
</div>
@endsection
