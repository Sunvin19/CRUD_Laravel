@extends('_layouts.app')

@section('title', 'Crear Nueva Nota')

@section('content')
    <h2>Crear Nota</h2>
    @foreach ($errors->all() as $error)
        <div style="color: red">{{ $error }}</div>
    @endforeach
    <form action="{{ route('note.store') }}" method="POST">
        @csrf
        <label>Título:</label>
        <input type="text" name="title" value="{{ old('title') }}" required>

        <label>Descripción:</label>
        <textarea name="description" required>{{ old('description') }}</textarea>

        <label>Fecha:</label>
        <input type="date" name="date" value="{{ old('date') }}" required>

        <label>Completada:</label>
        <input type="checkbox" name="done" value="1" {{ old('done') ? 'checked' : '' }}>

        <button type="submit">Guardar</button>
        <a href="{{ route('note.index') }}">Cancelar</a>
    </form>
@endsection