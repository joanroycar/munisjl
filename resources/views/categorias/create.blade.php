<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BUBU CREAR</title>
</head>

<body>
    {!! Form::open([
        'route' => 'categorias.store',
        'autocomplete' => 'off',
    ]) !!}

    <label for=""> NOMBRE</label>
    <input type="text" name="nombre" placeholder="INGRESE EL NOMBRE DE LA CATEGORIA">
    <button type="submit">Registrar Categoria</button>


    {!! Form::close() !!}

</body>

</html>
