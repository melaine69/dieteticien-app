<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Ajouter un nouveau patient') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Utilisez ce formulaire et ajouter un nouveau patient au répertoire") }}
        </p>
    </header>

    <form method="post" action="{{ route('users.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="firstname" :value="__('Prénom')" />
            <x-text-input id="firstname" name="firstname" type="text" class="mt-1 block w-full" :value="old('firstname')" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('firstname')" />
        </div>

        <div>
            <x-input-label for="lastname" :value="__('Nom')" />
            <x-text-input id="lastname" name="lastname" type="text" class="mt-1 block w-full" :value="old('lastname')" required  />
            <x-input-error class="mt-2" :messages="$errors->get('lastname')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email')" required />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Mot de passe')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" :value="old('password')" required />
            <x-input-error class="mt-2" :messages="$errors->get('password')" />
        </div>

        <div>
            <x-input-label for="allergens" :value="__('Allergènes')" />
            <span class="mb-1 text-sm text-gray-600">{{ __('Ajouter les allergènes séparés par une virgule') }}</span>
            <x-textarea-input id="allergens" name="allergens" class="mt-1 block w-full" :value="old('allergens')" />
            <x-input-error class="mt-2" :messages="$errors->get('allergens')" />
        </div>

        <div>
            <x-input-label for="diets" :value="__('Régimes')" />
            <span class="mb-1 text-sm text-gray-600">{{ __('Ajouter vos régimes séparés par une virgule') }}</span>
            <x-textarea-input id="diets" name="diets" class="mt-1 block w-full" :value="old('diets')" />
            <x-input-error class="mt-2" :messages="$errors->get('diets')" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Créer') }}</x-primary-button>
        </div>
    </form>
</section>
