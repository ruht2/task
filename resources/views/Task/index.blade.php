<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
{{-- <body>
    @foreach ($task as $item)
    <h1>{{ $item->nombre }}</h1>
    <h1>{{ $item->direccion }}</h1>
    @endforeach
</body>
</html> --}}

<div class="container py-5">
    <a class="btn btn-success" href="{{ route('task.create') }}">Crear nuevo</a>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">direccion</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($task as $item)                 
            <tr>
              <td>{{ $item->nombre }}</td>
              <td>{{ $item->direccion }}</td>

              <td><form action="{{ route('task.destroy',$item->id) }}" class="eliminar" method="post">@method('delete')  
                @csrf             
                <button type="submit" class="btn btn-danger">Eliminar</button>         
              </form></td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>