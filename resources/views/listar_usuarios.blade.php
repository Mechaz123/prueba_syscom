<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/listar_usuarios.css') }} type="text/css" />
    <title>Listar Usuarios</title>
</head>

<body>
    @if ($error)
        <script>
            alert("{{$error}}");
        </script>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo electronico</th>
                <th>Cargo</th>
                <th>Fecha de ingreso</th>
                <th>Días trabajados</th>
                <th>Contrato</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuariosActivos as $usuario)
                <tr>
                    <td>{{ $usuario->id}}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->correo_electronico }}</td>
                    <td>{{ $usuario->rol->nombre_cargo }}</td>
                    <td>{{ \Carbon\Carbon::parse($usuario->fecha_ingreso)->format('Y/m/d') }}</td>
                    <td>{{ $usuario->dias_trabajados }}</td>
                    <td>
                        <a href="{{$usuario->contrato}}" target="blank">
                            <button class="button open_PDF">Ver contrato</button>
                        </a>
                    </td>
                    <td>
                        <a href="/editar_usuario/{{$usuario->id}}">
                            <button class="button edit">Editar</button>
                        </a>
                        <form action="/eliminar_usuario/{{$usuario->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button delete" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">
                                Borrar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="button_container">
        <a href="/ingresar_usuario">
            <button class="button">Ingresar usuario</button>
        </a>
    </div>
</body>

</html>
