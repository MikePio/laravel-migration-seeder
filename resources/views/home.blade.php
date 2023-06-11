@extends('layouts.main')

@section('title')
    Home
@endsection


@section('content')

<div class="container p-5" style="min-height: calc(100vh - 90px - 150px);">

  <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="">
        <th scope="col">#ID</th>
        <th scope="col">Azienda</th>
        <th scope="col">Stazione di partenza</th>
        <th scope="col">Stazione di arrivo</th>
        <th scope="col">Orario di partenza</th>
        <th scope="col">Orario di arrivo</th>
        <th scope="col">Codice Treno</th>
        <th scope="col">Numero Carrozze</th>
        <th scope="col">In orario</th>
        <th scope="col">Cancellato</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($trains as $train)

        <tr>
          <td>{{ $train->id }}</td>
          <td>{{ $train->agency }}</td>
          <td>{{ $train->departure_station }}</td>
          <td>{{ $train->arrival_station }}</td>
          <td>{{ $train->departure_time }}</td>
          <td>{{ $train->arrival_time }}</td>
          <td>{{ $train->train_code }}</td>
          <td>{{ $train->number_of_carriages }}</td>
          <td>{{ $train->in_time }}</td>
          <td>{{ $train->deleted }}</td>
        </tr>

      @endforeach


    </tbody>
  </table>

</div>

@endsection
