@extends('layout.main')
@section('title', 'Modifica')
@section('content')
<div class="container">
    {{-- Nel form inserisco "action=" " e method="POST" --}}
    <form action="" method="">
        @csrf
        <div class="mb-3">
          <label for="nome" class="form-label">Pizza</label>
          <input type="text" class="form-control" id="name" name="nome" placeholder="Nome">
        </div>
        <div class="mb-3">
          <label for="prezzo" class="form-label">Prezzo</label>
          <input type="text" class="form-control" id="prezzo" name="prezzo" placeholder="Prezzo">
        </div>
        <select class="form-select my-2" name="vegetariana" aria-label=".form-select-lg example">
            <option value="1">Vegetariana</option>
            <option value="0">-</option>
        </select>
        <button type="submit" class="btn btn-primary">Modifica</button>
      </form>
</div>
@endsection
