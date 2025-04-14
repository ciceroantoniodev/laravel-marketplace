<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar Produto') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="{{ route('admin.products.store') }}" method="POST">

                    @csrf

                    <div class="w-full mb-6">
                        <label for="store">Loja</label>
                        <select name="store" id="store" class="w-full border border-gray-700 rounded">
                            <option value=''>...</option>
                            @foreach ($stores as $store)
                                <option value="{{ $store->id }}">{{ $store->name }}</option>
                            @endforeach
                        </select>

                        @error('name')
                            <div class="w-full my-4 p-4 border-red-900 text-white bg-red-400">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="w-full mb-6">
                        <label for="name">Nome do Produto</label>
                        <input name="name" id="name" type="text" value="{{ old('name') }}" class="w-full border border-gray-700 rounded">

                        @error('name')
                            <div class="w-full my-4 p-4 border-red-900 text-white bg-red-400">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="w-full mb-6">
                        <label for="description">Descrição</label>
                        <input name="description" id="description" type="text" value="{{ old('description') }}" class="w-full border border-gray-700 rounded">

                        @error('description')
                            <div class="w-full my-4 p-4 border-red-900 text-white bg-red-400">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button
                        class="px-4 py-2 border border-green-900 text-white rounded bg-green-700 hover:bg-green-900 transition duration-300 ease-in-out">
                        Salvar
                    </button>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
