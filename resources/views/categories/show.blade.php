@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                <p class="card-text">{{ $category->description }}</p>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Editar Categoria</a>
            </div>
        </div>
    </div>
@endsection
