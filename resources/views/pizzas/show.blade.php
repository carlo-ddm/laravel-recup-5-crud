@extends('layout.main')
@section('title', 'Mostra')
@section('content')
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
            <tr class="{{$pizza->vegetariana === 1 ? 'table-success' : ''}}" >
              <th scope="row">{{$pizza->nome}}</th>
              <td>{{$pizza->prezzo}}</td>
              <td>
                @if ($pizza->vegetariana == 1)
                    Vegetariana
                @endif
              </td>
              <td>
                {{-- <a class="btn btn-primary" href="{{route('pizzas.show', $pizza)}}">Mostra</a> --}}
                <a class="btn btn-success" href="{{route('pizzas.edit', $pizza)}}">Cambia</a>
              </td>
            </tr>
        </tbody>
      </table>
</div>
@endsection
