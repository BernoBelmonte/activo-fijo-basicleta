@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Sale</h1>

        <form action="{{ route('sales.update', $sale->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="total_price">Total Price</label>
                <input type="text" class="form-control" id="total_price" name="total_price" value="{{ $sale->total_price }}">
            </div>

            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $sale->sale_date }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Sale</button>
        </form>
    </div>
@endsection
