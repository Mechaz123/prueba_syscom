<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/ingresar_usuario.css') }} type="text/css" />
    <title>{{ $editar ? "Editar Usuario" : "Ingresar Usuario" }}</title>
</head>
<body>
    <div class="title">
        <h1>{{ $editar ? "EDITAR USUARIO" : "CREAR USUARIO" }}</h1>
    </div>
    <form class="form" method="POST" action="{{ $editar ? '/editar/' . $usuario->id : '/crear_usuario' }}" onsubmit="return validar()">
        @csrf
        @if ($editar)
            @method('PUT')
        @endif
        <input value="{{ $editar ? $usuario->nombre : ''}}" type="text" name="nombre" placeholder="Nombre completo" />
        <input value="{{ $editar ? $usuario->correo_electronico : ''}}" type="email" name="correo_electronico" placeholder="Correo electronico" />
        <label>
            Seleccione el rol del usuario
            <select name="id_rol">
                <option value="" selected>Ninguno</option>
                @foreach ($todosRoles as $rol)
                <option value="{{$rol->id}}" {{ $editar && $usuario->id_rol == $rol->id ? 'selected' : '' }}>{{$rol->nombre_cargo}}</option>
                @endforeach
            </select>
        </label>
        <label>
            Seleccione la fecha de ingreso
            <input type="date" value="{{ $editar ? $usuario->fecha_ingreso : '' }}" name="fecha_ingreso" />
        </label>
        <button type="submit">{{ $editar ? "Editar" : "Crear" }}</button>
    </form>
    <a href="/">
        <button class="button_return">Regresar</button>
    </a>
    <script src="{{ asset('js/validaciones.js') }}"></script>
</body>
</html>