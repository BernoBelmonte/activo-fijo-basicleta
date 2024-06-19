@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Categoria</h1>

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>

            <div class="form-group">
                <label for="description">Descripcion</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $category->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Category</button>
        </form>
    </div>
@endsection
