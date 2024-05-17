<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index');
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'Qty'  => 'required|numeric',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'nullable'
        ]);

        // Check if a product with the same name already exists
        $existingProduct = Product::where('name', $data['name'])->first();
        if ($existingProduct) {
            return redirect()->back()->with('error', 'Product already exists.');
        }

        $newProduct = Product::create($data);

        return redirect(route('product.thanks'));
    }

    public function thanks() {
        return view('product.thanks');
    }

    public function all()
    {
        // Check if the current route is 'product.all'
        if (request()->is('product/all')) {
            $products = Product::all();
            return view('product.all', compact('products'));
        } else {
            // Redirect to the 'product.all' route
            return redirect()->route('product.index');
        }
    }
    
    


}
