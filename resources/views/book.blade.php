<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($book as $item)
    <h1>{{ $item->autor }}</h1>
    <h2>{{ $item->nombre }}</h2>
    <h2>{{ $item->color }}</h2>
    <h2>{{ $item->pagina }}</h2>
    @endforeach

</body>
</html>