@extends('_layouts.appProduct')

@section('title', 'Detalle del Producto')

@section('content')
    <h2>{{ $product->name }}</h2>
    <p>{{ $product->description }}</p>
    <p>Precio: {{ $product->price }}</p>
    <p>Stock: {{ $product->stock }}</p>
    <a href="{{ route('product.index') }}">Volver</a>
@endsection
