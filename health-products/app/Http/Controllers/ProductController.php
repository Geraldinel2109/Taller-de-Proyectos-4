<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PDF; // de barryvdh/laravel-dompdf

class ProductController extends Controller
{
    /**
     * Mostrar el formulario de registro de productos.
     */
    public function index()
    {
        // Esto carga resources/views/products/index.blade.php
        return view('products.index');
    }

    /**
     * Almacenar un nuevo producto.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric',
            'description' => 'required|string',
        ]);

        Product::create($request->only(['name','price','description']));

        return redirect()
            ->route('products.index')
            ->with('success', 'Producto registrado con éxito');
    }

    /**
     * Generar y descargar la factura en PDF.
     */
    public function generateInvoice()
    {
        $products = Product::all();
        $pdf = PDF::loadView('products.invoice', compact('products'));
        return $pdf->download('factura.pdf');
    }
}
