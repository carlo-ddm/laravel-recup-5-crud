@extends('layout.main')
@section('title', 'Le nostre pizze')
@section('content')
{{-- @dump($pizzas) --}}
<div class="container">
    <table class="table m-5">
        <thead>
          <tr>
            <th scope="col">Pizza</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Vegetariana</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pizzas as $pizza)

            <tr class="{{$pizza->vegetariana === 1 ? 'table-success' : ''}}" >
              <th scope="row">{{$pizza->nome}}</th>
              <td>&#8364;  {{$pizza->prezzo}} </td>
              <td>
                @if ($pizza->vegetariana == 1)
                    Vegetariana
                @endif
              </td>
              <td>
                {{-- Sia per Show sia per Edit posso decidere se passare l'intera entità o soltanto l'id --}}
                <a class="btn btn-primary" href="{{route('pizzas.show', $pizza)}}">Mostra</a>
                <a class="btn btn-success" href="{{route('pizzas.edit', $pizza->id)}}">Cambia</a>
                <form class="d-inline" action="{{route('pizzas.destroy', $pizza)}}" method="POST"
                onsubmit="return confirm('Vuoi eliminare {{$pizza->nome}}?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
