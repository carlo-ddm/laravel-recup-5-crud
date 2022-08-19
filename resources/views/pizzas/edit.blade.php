@extends('layout.main')
@section('title', 'Modifica')
@section('content')
<div class="container">
    <h1>Modifica: {{$pizza->nome}}</h1>
    {{-- Nel form inserisco "action=" " e method="POST" --}}
    <form action="{{route('pizzas.update', $pizza)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
          <label for="nome" class="form-label">Pizza</label>
          <input type="text" class="form-control" id="name" name="nome" value="{{$pizza->nome}}">
        </div>
        <div class="mb-3">
          <label for="prezzo" class="form-label">Prezzo</label>
          <input type="text" class="form-control" id="prezzo" name="prezzo" value="{{$pizza->prezzo}}">
        </div>
        <select class="form-select my-2" name="vegetariana" aria-label=".form-select-lg example">
            <option value="1">Vegetariana</option>
            <option value="0">-</option>
        </select>
        <button type="submit" class="btn btn-primary">Modifica</button>
      </form>
</div>
@endsection
