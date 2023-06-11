<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOLA BUBB</title>
</head>

<body>

    <h1>HOLA MUNDO BUBUUU</h1>

    <a href="{{ route('categorias.create') }}">CREAR UN CATEGORIA</a>

    {!! Form::open([
        'route' => 'categorias.filtro',
        'autocomplete' => 'off',
    ]) !!}


    <select name="estado" id="">
        <option value="1"> ACTIVO</option>

        <option value="2"> INACTIVO</option>
    </select>

    <button type="submit">Filtrar</button>

    {!! Form::close() !!}

    <table>
        <thead>
            <tr>
                <th> ID
                </th>
                <th>
                    Nombre
                </th>
                <th> Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nombre }}</td>
                    <td>
                        <a href="{{ route('categorias.edit', $categoria) }}">Editar</a>


                        <form action="{{ route('categorias.destroy', $categoria) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" style="background: red"> Eliminar </button>

                        </form>



                    </td>
                </tr>
            @endforeach

        </tbody>


    </table>



</body>

</html>
