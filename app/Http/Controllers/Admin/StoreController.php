<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index() {

        $stores = Store::all();

        return view('exemplo', compact('stores'));

    }


    public function store() {

        // Create: Mass Assignment
        // $store = Store::create([
        //     'name' => 'Loja Exemplo 2',
        //     'description' => 'Descrição da Loja',
        //     'about' => 'Contexto da Loja',
        //     'phone' => '+5599235223545',
        //     'whatsapp' => '+5599235223545'
        // ]);

        $store = Store::findOrFail(6);

        // $store->update([

        //     'name' => 'Nova Loja Exemplo 2',
        // ]);

        $store->delete();

        dump($store);

    }

}

