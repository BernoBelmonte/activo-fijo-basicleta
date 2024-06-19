@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Sale</h1>

        <form action="{{ route('sales.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="total_price">Total Price</label>
                <input type="text" class="form-control" id="total_price" name="total_price">
            </div>

            <div class="form-group">
                <label for="sale_date">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>

            <button type="submit" class="btn btn-primary">Create Sale</button>
        </form>
    </div>
@endsection
