@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Item</h1>

        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $item->price }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Item</button>
        </form>
    </div>
@endsection
