@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sales</h1>

        <a href="{{ route('sales.create') }}" class="btn btn-primary mb-3">Crear Venta</a>
        <a href="{{ route('sales.exportPdf') }}" class="btn btn-success mb-3">Exportar a PDF</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Precio Total</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    <tr>
                        <td>{{ $sale->id }}</td>
                        <td>{{ $sale->total_price }}</td>
                        <td>{{ $sale->sale_date }}</td>
                        <td>
                            <a href="{{ route('sales.show', $sale->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this sale?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<style>
    h1 {
        color:#000000;
    }
    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody + tbody {
        border-top: 2px solid #dee2e6;
    }

    .table .table-actions {
        white-space: nowrap;
    }

    .table .table-actions a {
        margin-right: 0.5rem;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }
</style>

