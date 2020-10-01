<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/acercade">Acerca de</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="/portafolio">Portafolio</a></li>
        </ul>
    </nav>
    @yield('nav')
</body>
</html>
