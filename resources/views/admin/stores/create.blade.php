<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar Loja') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="{{ route('admin.stores.store') }}" method="POST">
                    @csrf

                    <div class="w-full mb-6">
                        <label for="name">Nome da Loja</label>
                        <input name="name" id="name" type="text" class="w-full border border-gray-700 rounded">

                        @error('name')
                            <div class="w-full my-4 p-4 border-red-900 bg-red-400">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="w-full mb-6">
                        <label for="description">Descrição</label>
                        <input name="description" id="description" type="text" class="w-full border border-gray-700 rounded">

                        @error('description')
                            <div class="w-full my-4 p-4 border-red-900 bg-red-400">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="w-full mb-6">
                        <label for="about">Sobre a Loja</label>
                        <textarea name="about" id="about" class="w-full border border-gray-700 rounded"></textarea>

                        @error('about')
                            <div class="w-full my-4 p-4 border-red-900 bg-red-400">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="w-full mb-6">
                        <label for="phone">Telefone (Fixo)</label>
                        <input name="phone" id="phone" type="text" class="w-full border border-gray-700 rounded">

                        @error('phone')
                            <div class="w-full my-4 p-4 border-red-900 bg-red-400">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="w-full mb-6">
                        <label for="whatsapp">Whatsapp / Celular</label>
                        <input name="whatsapp" id="whatsapp" type="text" class="w-full border border-gray-700 rounded">

                        @error('whatsapp')
                            <div class="w-full my-4 p-4 border-red-900 bg-red-400">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button
                        class="px-4 py-2 border border-green-900 rounded bg-green-700 hover:bg-green-900 transition duration-300 ease-in-out">
                        Salvar
                    </button>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
