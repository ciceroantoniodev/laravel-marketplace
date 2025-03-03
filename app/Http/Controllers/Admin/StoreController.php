<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormRequest;
use App\Models\Store;

class StoreController extends Controller
{
    public function __construct(private Store $store)
    {
    }


    public function index() {

        $stores = $this->store->paginate(10);

        return view('admin.stores.index', ['stores' => $stores]);

    }


    public function create() {

        return view('admin.stores.create');

    }


    public function store(StoreFormRequest $request) {

        // Create: Mass Assignment

        $this->store->create($request->all());

        return redirect()->route('admin.stores.index');

    }


    public function edit(string $store) {

        $store = $this->store->findOrFail($store);

        return view('admin.stores.edit', compact('store'));

    }


    public function update(string $store, StoreFormRequest $request) {

        $store = $this->store->findOrFail((int)$store);

        $store->update($request->all());

        return redirect()->back();

    }


    public function destroy(string $store) {

        $store = $this->store->findOrFail((int)$store);

        $store->delete();

        return redirect()->back();

    }
}

