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
    <div class="container py-5">
        <form action="{{ route('keanu.store') }}" method="post">
          @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Nombre</label>
                <input name="nombre" type="text" class="form-control" placeholder="Ingrese un nombre">
              </div>
              <div class="form-group col-md-6">
                <label>Genero</label>
                <input name="genero" type="text" class="form-control" placeholder="Genero">
              </div>
              <div class="form-group col-md-6">
                <label>Color</label>
                <input name="color" type="text" class="form-control" placeholder="Color">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Store</button>
          </form>
    </div>
</body>
</html>