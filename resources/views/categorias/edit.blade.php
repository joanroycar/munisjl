<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BUBU CREAR</title>
</head>

<body>
    {!! Form::model($categoria, [
        'route' => ['categorias.update', $categoria],
        'method' => 'put',
        'files' => true,
        'class' => 'formulario',
    ]) !!}

    <label for=""> NOMBRE</label>
    <input type="text" name="nombre" placeholder="INGRESE EL NOMBRE DE LA CATEGORIA" value="{{$categoria->nombre}}">
    <button type="submit">Actualizar Categoria</button>


    {!! Form::close() !!}

</body>

</html>
