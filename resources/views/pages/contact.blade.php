<x-guest-layout>
    <div class="mx-auto mb-10 pt-10 max-w-4xl px-6 lg:px-8">
        <h1 class="text-3xl md:text-4xl font-bold">{{ __('Coordonnées') }}</h1>
        <br/>
        <div class="text-lg">
            <p>Cabinet de Diététique : <span class="text-fuchsia-900">Sandrine Coupart </span></p>
            <br/>
            <p>Adresse :<span class="text-fuchsia-900">10 rue de l'hôtel de ville - 14118 CAEN</span></p>
            <br/>
            <p>Téléphone :<span class="text-fuchsia-900">04 78 56 90 45</span></p>
            <br/>
            <p>Email : <a href="mailto:scoupart-dietetique@mail.com" class="text-fuchsia-900">scoupart-dietetique@mail.com</a>
            </p>

        </div>

    </div>
    <div class="mx-auto max-w-4xl px-6 lg:px-8 prose prose-lg">
        <div class="text-lg">
            <h1 class="text-3xl md:text-4xl font-bold">{{ __('Contactez-nous') }}</h1>
            <p>Nous sommes ravis de vous aider. Si vous avez des questions, des préoccupations ou si vous souhaitez
                planifier une consultation, n'hésitez pas à nous contacter.</p>

            <form action="https://formspree.io/f/xwkgvvkp" method="POST">
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-fuchsia-900">Nom / prénom </label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="w-full rounded-md py-3 px-6 text-base font-medium"

                    />
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-fuchsia-900">Email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        min="0"
                        class="w-full rounded-md  py-3 px-6 text-base font-medium"
                    />
                </div>

                <div class="mb-5">
                    <label for="message" class="mb-3 block text-base font-medium text-fuchsia-900">Message</label>
                    <textarea
                        name="message"
                        class="w-full rounded-md py-3 px-6 text-base font-medium"
                    ></textarea>
                </div>

                <x-primary-button class="ml-3">{{ __('Envoyer') }}</x-primary-button>
            </form>
        </div>

    </div>
</x-guest-layout>
