@extends('_layouts.appProduct')

@section('title', 'Editar Producto')

@section('content')
    <h2>Editar Producto</h2>
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>

        <label>Descripción:</label>
        <textarea name="description" required>{{ $product->description }}</textarea>

        <label>Precio:</label>
        <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>

        <label>Stock:</label>
        <input type="number" name="stock" value="{{ $product->stock }}">

        <button type="submit">Actualizar</button>
        <a href="{{ route('product.index') }}">Cancelar</a>
    </form>
@endsection