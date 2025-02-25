<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return redirect()->route('products.index')->with('error', 'Produit non trouvé');
        }
        return view('products.show', compact('product'));
    }
}

// class ProductController extends Controller
// {
//     public function index()
//     {
//         $products = Product::all();
//         return response()->json($products);
//     }

//     public function store(Request $request)
//     {
//         $product = Product::create($request->all());
//         return response()->json($product, 201);
//     }

//     public function show($id)
//     {
//         $product = Product::findOrFail($id);
//         return response()->json($product);
//     }

//     public function update(Request $request, $id)
//     {
//         $product = Product::findOrFail($id);
//         $product->update($request->all());
//         return response()->json($product, 200);
//     }

//     public function destroy($id)
//     {
//         Product::destroy($id);
//         return response()->json(null, 204);
//     }
// }

