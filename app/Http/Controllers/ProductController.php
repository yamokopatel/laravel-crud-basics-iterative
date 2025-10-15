<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            // 'name' => $request->name,
            'name' => 'required|max:63',
            // 'quantity' => $request->quantity,
            'quantity' => 'required',
            // 'description' => $request->description,
            'description' => 'required|max:255'
        ]);

        $product = Product::create($data);
        // return redirect('/products/' . $product . '/show');
        return redirect()->route('products.show', compact('product'))->with('status', 'Successful data store');
    }

    public function show(Product $product) {
        // $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function destroy(Product $product) {
        // $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    public function edit(Product $product) {
        // $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product) {
        // $product = Product::find($id);

        $data = [
            'name' => $request->name,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ];

        $product->update($data);
        return redirect()->route('products.show', compact('product'));
    }
}
