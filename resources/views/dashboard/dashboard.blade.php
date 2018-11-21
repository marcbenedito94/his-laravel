<html>
<head>
    <title>Document</title>
</head>
<body>
<ul>
    <li><a href="/">Página inicio</a></li>
    <li><a href="/paginados">Página dos</a></li>
    <li><a href="/paginatres">Página tres</a></li>
    <li><a href="/paginacuatro">Página cuatro</a></li>
</ul>

Mi Sesión {{ Session::get('miSesionTexto', 'no existe sesion')}} | <a href="/cerrarsesion">Cerrar sesión</a>

<br/><br/>

Dashboard

<br/><br/>

@foreach($users as $user)
<li> {{ $user ->role }} -- {{ $user->name }}</li>
@endforeach
</body>
</html>
