@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sale Details</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sale ID: {{ $sale->id }}</h5>
                <p class="card-text">Total Price: {{ $sale->total_price }}</p>
                <p class="card-text">Sale Date: {{ $sale->sale_date }}</p>
                <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-primary">Edit Sale</a>
            </div>
        </div>
    </div>
@endsection
