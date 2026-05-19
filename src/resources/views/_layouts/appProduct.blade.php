<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <style>
        .alert{
            padding: 10x;
            margin-bottom: 15px;
        }
        .alert-success{
            background-color: rgb(234, 231, 226);
            color: lightgreen;
        }
        .alert-danger{
            background-color: rgb(228, 225, 221);
            color: red;
        }
    </style>
</head>

<body>
    <header>
        <h1>Mi Aplicación de Productos</h1>
        <nav>
            <a href="{{ route('product.index') }}">Inicio</a> |
            <a href="{{ route('product.create') }}">Crear Producto</a>
        </nav>
    </header>
    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger">
                {{ session('danger') }}
            </div>
        @endif
    </div>
    <main>
        @yield('content')
    </main>
</body>

</html>