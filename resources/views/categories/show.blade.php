@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Category Details</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $category->name }}</h5>
                <p class="card-text">{{ $category->description }}</p>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit Category</a>
            </div>
        </div>
    </div>
@endsection
