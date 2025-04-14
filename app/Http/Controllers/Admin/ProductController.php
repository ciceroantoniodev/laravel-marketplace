<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use App\Models\Store;

class ProductController extends Controller
{
    public function __construct(private Product $product)
    {
    }


    public function index() {

        $products = $this->product->paginate(10);

        return view('admin.products.index', ['products' => $products]);

    }


    public function create(Store $store) {

        $stores = $store->all(['id', 'name']);

        return view('admin.products.create', ['stores' => $stores]);

    }


    public function store(ProductFormRequest $request, Store $store) {

        $store = $store->findOrFail($request->store);

        $store->products()->create($request->except('store'));

        return redirect()->route('admin.products.index');

    }


    public function edit(string $product) {

        $product = $this->product->findOrFail($product);

        return view('admin.products.edit', compact('product'));

    }


    public function update(string $product, ProductFormRequest $request) {

        $product = $this->product->findOrFail((int)$product);

        $product->update($request->all());

        return redirect()->back();

    }


    public function destroy(string $product) {

        $product = $this->product->findOrFail((int)$product);

        $product->delete();

        return redirect()->back();

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

}
