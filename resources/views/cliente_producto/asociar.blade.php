<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola desde asociar:</h1>

    <form action="{{route('role_user.store')}}" method="POST" enctype="multipart/form-data">

        @csrf


        <br>
        <h1>Usuarios:</h1>
        <select name="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->name }}</option>
            @endforeach
        </select>
        <br>
        <h1>Roles:</h1>
        <select name="role_id">
            @foreach($roles as $rol)
                <option value="{{ $rol->id }}">{{ $rol->id }} - {{ $rol->name }}</option>
            @endforeach
        </select>


         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>

</body>
</html>
