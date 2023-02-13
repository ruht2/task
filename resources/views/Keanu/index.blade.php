<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

{{-- </head>
<body>
    @foreach ($data as $erika)
    <h1>{{ $erika->nombre }}</h1>
    <h1>{{ $erika->genero }}</h1>
    <h1>{{ $erika->color }}</h1>
    @endforeach
</body>
</html> --}}

<div class="container py-5">
    <a class="btn btn-success" href="{{ route('keanu.create') }}">Crear nuevo</a>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">genero</th>
              <th scope="col">color</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)                 
            <tr>
              <td>{{ $item->nombre }}</td>
              <td>{{ $item->genero }}</td>
              <td>{{ $item->color }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>