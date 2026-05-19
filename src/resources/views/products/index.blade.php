@extends('_layouts.appProduct')

@section('title', 'Listado de Productos')

@section('content')
    <h2>Listado de Productos</h2>

    @forelse ($products as $product)
        <div>
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <small>{{ $product->price }} €</small>
            <div>
                <a href="{{ route('product.edit', $product->id) }}">Editar</a>
                <a href="{{ route('product.show', $product->id) }}">Ver</a>
                <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </div>
        </div>
    @empty
        <p>No hay productos disponibles.</p>
    @endforelse
@endsection