@extends('layouts.app')

@section('content')
    <h1>Crear Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="category_id">Categoria</label>
            <select name="category_id" id="category_id" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="quantity">Cantidad</label>
            <input type="number" name="quantity" id="quantity" required>
        </div>
        <div>
            <label for="price">Precio</label>
            <input type="number" name="price" id="price" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection
