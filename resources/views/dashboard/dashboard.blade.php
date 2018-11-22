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

@if ($user_role === 'technical')
    <br/><br/>
    <a href="#">Create User</a>
    <br/><br/>
@elseif ($user_role === 'admin')
    <br/><br/>
    <a href="#">Patient List</a>
    <br/><br/>
    <a href="#">Histories List</a>
    <br/><br/>
    <a href="#">Users List</a>
    <br/><br/>
    <a href="#">Create User</a>
    <br/><br/>
@elseif ($user_role === 'doctor')
    <br/><br/>
    <a href="#">Patients List</a>
    <br/><br/>
    <a href="#">Histories List</a>
    <br/><br/>
@elseif ($user_role === 'patient')
    <br/><br/>
    <a href="#">Details of Me</a>
    <br/><br/>
    <a href="#">My Histories Details</a>
    <br/><br/>
@endif

</body>
</html>
