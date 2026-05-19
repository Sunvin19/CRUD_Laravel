@extends('_layouts.appProduct')

@section('title', 'Crear Nuevo Producto')

@section('content')
    <h2>Crear Nota</h2>
    @foreach ($errors->all() as $error)
        <div style="color: red">{{ $error }}</div>
    @endforeach
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label>Descripción:</label>
        <textarea name="description" required>{{ old('description') }}</textarea>

        <label>Precio:</label>
        <input type="number" name="price" step="0.01" value="{{ old('price') }}" required>

        <label>stock:</label>
        <input type="number" name="stock" value="{{ old('stock') }}">

        <button type="submit">Guardar</button>
        <a href="{{ route('product.index') }}">Cancelar</a>
    </form>
@endsection