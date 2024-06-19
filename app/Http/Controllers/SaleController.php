<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Sale;
use Illuminate\Http\Request;
use PDF;
class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::with('items')->get();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $items = Item::all();
        return view('sales.create', compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sale_date' => 'required|date',
            'items' => 'required|array',
            'items.*.id' => 'required|exists:items,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        $totalPrice = 0;

        foreach ($request->items as $saleItem) {
            $item = Item::findOrFail($saleItem['id']);
            if ($item->quantity < $saleItem['quantity']) {
                return redirect()->back()->withErrors(['message' => 'Insufficient quantity for item: ' . $item->name]);
            }

            $totalPrice += $item->price * $saleItem['quantity'];
        }

        $sale = Sale::create([
            'sale_date' => $request->sale_date,
            'total_price' => $totalPrice,
        ]);

        foreach ($request->items as $saleItem) {
            $item = Item::findOrFail($saleItem['id']);
            $item->update(['quantity' => $item->quantity - $saleItem['quantity']]);

            $sale->items()->attach($item->id, [
                'quantity' => $saleItem['quantity'],
                'price' => $item->price,
            ]);
        }

        return redirect()->route('sales.index')->with('success', 'Sale recorded successfully.');
    }

    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        $items = Item::all();
        return view('sales.edit', compact('sale', 'items'));
    }

    public function update(Request $request, Sale $sale)
    {
        // Implement logic for updating sales if needed
    }

    public function destroy(Sale $sale)
    {
        // Implement logic for deleting sales if needed
    }

    public function exportPdf()
    {
        $sales = Sale::all();

        $pdf = PDF::loadView('sales.pdf', compact('sales'));

        return $pdf->download('sales.pdf');
    }
}
