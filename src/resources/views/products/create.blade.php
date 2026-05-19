@extends('_layouts.appProduct')

@section('title', 'Crear Nuevo Producto')

@section('content')
    <h2>Crear Nota</h2>
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name" required>

        <label>Descripción:</label>
        <textarea name="description" required></textarea>

        <label>Precio:</label>
        <input type="number" name="price" step="0.01" required>

        <label>stock:</label>
        <input type="number" name="stock">

        <button type="submit">Guardar</button>
        <a href="{{ route('product.index') }}">Cancelar</a>
    </form>
@endsection