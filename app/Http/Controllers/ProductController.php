<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Session;
use App\Http\Requests\Product\StoreProductRequest;

class ProductController extends Controller
{
    public function index(){
        $data = Product::with('category')->paginate(1);
        $limit = 1;
        $currpage = (request()->get('page')) ?? 1;
        $offset = ($currpage * $limit) - $limit;
        
        return view('product.list', compact('data', 'offset'));
    }

    public function edit($id){
        $data = Product::findOrFail($id);

        $categories = Category::all();

        return view('product.edit', compact('data', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('product.create', compact('categories'));
    }

    public function store(StoreProductRequest $request)
    {
        // $product = new Product();
        // $product->name = $request->name;
        // $product->qty = $request->qty;
        // $product->cost = $request->cost;
        // $product->price = $request->price;
        // $product->category_id = $request->category_id;

        // $product->save();

        $product = Product::insert([
            'name' => $request->name,
            'qty' => $request->qty,
            'cost' => $request->cost,
            'price' => $request->price,
            'category_id' => $request->category_id
        ]);
        Session::flash('success' , 'Create Product Successfully');

        return redirect('/product');
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update([
            'name' => $request->name,
            'qty' => $request->qty,
            'cost' => $request->cost,
            'price' => $request->price,
            'category_id' => $request->category_id
        ]);
        Session::flash('success' , 'Update Product Successfully');

        return redirect('/product');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        Session::flash('success' , 'Delete Product Successfully');

        return back();
    }
}
