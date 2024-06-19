@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle de Venta</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $sale->id }}</h5>
                <p class="card-text">Precio Total: {{ $sale->total_price }}</p>
                <p class="card-text">Fecha Venta: {{ $sale->sale_date }}</p>
                <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-primary">Editar Venta</a>
            </div>
        </div>
    </div>
@endsection
