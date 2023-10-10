<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Liste des recettes') }}
            </h2>

            <a class="px-3 py-2 font-medium rounded-sm bg-fuchsia-200 p-3 text-gray-900 hover:text-gray-500"
               href="{{ route('recipes.create') }}">{{ __('Ajouter une recette') }}</a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="mb-4 px-4 py-3 bg-fuchsia-200 text-gray-600">
                    {!! session('status') !!}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <table class="mb-10 table-auto w-full border-collapse">
                        <thead>
                        <tr>
                            <th class="p-2 text-left">{{ __('Nom de la recette') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recipes as $recipe)
                            <tr>
                                <td class="px-2 py-3 text-gray-600 border-b">{{ $recipe->name }}</td>
                                <td class="px-2 py-3 text-gray-600 border-b">
                                    <a href="{{ route('recipes.edit', $recipe) }}">{{ __('Modifier') }} </a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="p-2">
                        {{ $recipes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
