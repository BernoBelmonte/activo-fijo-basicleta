@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Item</h1>

        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
            </div>

            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $item->price }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Item</button>
        </form>
    </div>
@endsection
