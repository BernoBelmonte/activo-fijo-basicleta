@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
                <p class="card-text">Precio: ${{ $item->price }}</p>
                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary">Editar Item</a>
            </div>
        </div>
    </div>
@endsection
