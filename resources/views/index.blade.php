<html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <ul>
            <li><a href="/">Página inicio</a></li>
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/paginados">Página dos</a></li>
            <li><a href="/paginatres">Página tres</a></li>
            <li><a href="/paginacuatro">Página cuatro</a></li>
        </ul>

        Mi Sesión {{ Session::get('miSesionTexto', 'no existe sesion')}} | <a href="/cerrarsesion">Cerrar sesión</a>

        <br/><br/>

        <form action="/" method="post">
            @csrf
            <label for="txtTexto">Ingrese un texto</label>
            <input type="text" id="txtTexto" name="txtTexto">
            <input type="submit" value="Guardar sesion">
        </form>
    </body>
</html>
