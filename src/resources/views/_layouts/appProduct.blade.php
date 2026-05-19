<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Mi Aplicación de Productos</h1>
        <nav>
            <a href="{{ route('product.index') }}">Inicio</a> |
            <a href="{{ route('product.create') }}">Crear Producto</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>