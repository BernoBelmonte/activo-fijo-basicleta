@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Venta</h1>

        <form action="{{ route('sales.update', $sale->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="total_price">Precio Total</label>
                <input type="text" class="form-control" id="total_price" name="total_price" value="{{ $sale->total_price }}">
            </div>

            <div class="form-group">
                <label for="sale_date">Fecha Venta</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $sale->sale_date }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Venta</button>
        </form>
    </div>
@endsection
