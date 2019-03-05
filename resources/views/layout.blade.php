<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso Laravel</title>
</head>
<body>
    <header>
        <nav>
            <a href="<?php echo route('home') ?>">Inicio</a>
            <a href="<?php echo route('saludo','Jorge') ?>">Saludo</a>
            <a href="<?php echo route('contacto') ?>">Contacto</a>
        </nav>
    </header>
    @yield('contenido')
<footer>Copyright ® {{date('Y')}}</footer>
</body>
</html>