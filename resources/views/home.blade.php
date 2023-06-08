@extends('layouts.main')

@section('title')
    Home
@endsection


@section('content')

<div class="container d-flex flex-column align-items-center justify-content-center" style="min-height: calc(100vh - 90px - 150px);">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
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
      <tr>
        <th scope="row">1</th>
          <td>1</td>
          <td>2</td>
          <td>3</td>
          <td>4</td>
          <td>5</td>
          <td>6</td>
          <td>7</td>
          <td>8</td>
          <td>9</td>
        </tr>

    </tbody>
  </table>

</div>

@endsection
