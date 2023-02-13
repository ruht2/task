<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    {{-- @foreach ($book as $item)
    <h1>{{ $item->autor }}</h1>
    <h2>{{ $item->nombre }}</h2>
    <h2>{{ $item->color }}</h2>
    <h2>{{ $item->pagina }}</h2>
    @endforeach --}}

    <div class="container py-5">
      <a class="btn btn-success" href="{{ route('book.create') }}">Crear nuevo</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Autor</th>
                <th scope="col">Nombre</th>
                <th scope="col">Color</th>
                <th scope="col">Página</th>

                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($book as $item)                 
              <tr>
                <td>{{ $item->autor }}</td>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->color }}</td>
                <td>{{ $item->pagina }}</td>

                <td><form action="{{ route('book.destroy',$item->id) }}" class="eliminar" method="post">@method('delete')  
                  @csrf             
                  <button type="submit" class="btn btn-danger">Eliminar</button>         
                </form></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

</body>
</html>