<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Ajouter une nouvelle recette') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Utilisez ce formulaire et ajouter une nouvelle recette au catalogue") }}
        </p>
    </header>

    <form method="post" action="{{ route('recipes.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Nom')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-textarea-input id="description" name="description" class="mt-1 block w-full" :value="old('description')" required />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div>
            <x-input-label for="preparation_time" :value="__('Temps de préparation')" />
            <x-text-input id="preparation_time" name="preparation_time" type="number" class="mt-1 block w-full" :value="old('preparation_time')" required/>
            <x-input-error class="mt-2" :messages="$errors->get('preparation_time')" />
        </div>

        <div>
            <x-input-label for="rest_time" :value="__('Temps de repos')" />
            <x-text-input id="rest_time" name="rest_time" type="number" class="mt-1 block w-full" :value="old('rest_time')"/>
            <x-input-error class="mt-2" :messages="$errors->get('rest_time')" />
        </div>

        <div>
            <x-input-label for="cooking_time" :value="__('Temps de cuisson')" />
            <x-text-input id="cooking_time" name="cooking_time" type="number" class="mt-1 block w-full" :value="old('cooking_time')"/>
            <x-input-error class="mt-2" :messages="$errors->get('cooking_time')" />
        </div>

        <div>
            <x-input-label for="ingredients" :value="__('Ingrédients')" />
            <x-textarea-input id="ingredients" name="ingredients" class="mt-1 block w-full" :value="old('ingredients')" required />
            <x-input-error class="mt-2" :messages="$errors->get('ingredients')" />
        </div>

        <div>
            <x-input-label for="steps" :value="__('Etapes')" />
            <x-textarea-input id="steps" name="steps" class="mt-1 block w-full" :value="old('steps')" required />
            <x-input-error class="mt-2" :messages="$errors->get('steps')" />
        </div>

        <div>
            <x-input-label for="diet" :value="__('Régime')" />
            <x-text-input id="diet" name="diet" type="text" class="mt-1 block w-full" :value="old('diet')" />
            <x-input-error class="mt-2" :messages="$errors->get('diet')" />
        </div>
        <div>
            <x-input-label for="allergens" :value="__('Allergènes')" />
            <x-textarea-input id="allergens" name="allergens" class="mt-1 block w-full" :value="old('allergens')" />
            <x-input-error class="mt-2" :messages="$errors->get('allergens')" />
        </div>

        <div>
            <x-input-label for="public" :value="__('Visibilité')" />
            <x-checkbox-input id="public" name="public"  class="mt-1 block" :value="old('public', 1)"/>
            <x-input-error class="mt-2" :messages="$errors->get('public')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Créer') }}</x-primary-button>
        </div>
    </form>
</section>

