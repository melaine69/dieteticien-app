<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Liste des recettes') }}
            </h2>

            <a class="px-3 py-2 font-medium rounded-sm text-white bg-teal-600" href="{{ route('recipes.create') }}">{{ __('Ajouter une recette') }}</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="grid grid-cols-3 gap-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($recipes as $recipe)
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h2 class="text-lg font-bold">{{ $recipe->name }}</h2>
                    <p class="text-gray-600">{{ $recipe->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
