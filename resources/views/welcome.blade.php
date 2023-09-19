<x-guest-layout>
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <section class="grid md:grid-cols-2 gap-10 mb-10 p-10 rounded-3xl bg-gray-200">
            <div>
                <h2 class="mb-3 text-2xl font-bold">{{ __('A propos') }}</h2>
                <p class="text-lg text-gray-800">{{ __("Bienvenue sur mon site. Je suis Sandrine Coupart, diététicienne professionnelle avec plus de 5 ans d'expérience dans le domaine de la nutrition et de la santé. Mon approche est centrée sur la compréhension des besoins individuels de chaque personne et sur la fourniture de conseils pratiques pour vous aider à maintenir un mode de vie sain. Afin d'aider un maximum de personnes, j'ai mis en place ce site web, afin que vous puissiez accéder à des recettes équilibrées et découvrir l'ensemble de mes prestations.") }}</p>
            </div>
        </section>

        <section class="grid sm:grid-cols-2 lg:grid-cols-3 gap-10 ">
            @foreach($recipes as $recipe)
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <h2 class="text-lg font-bold">{{ $recipe->name }}</h2>
                        <p class="text-gray-600">{{ $recipe->description }}</p>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
</x-guest-layout>
