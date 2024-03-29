<x-app-layout>
    <x-slot name="header">

        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Modifier une recette') }}
            </h2>

            <a class="underline text-sm text-fuchsia-900" href="{{ route('recipes.index') }}">{{ __('Voir toutes les recettes') }}</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('recipes.partials.create-recipe-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
