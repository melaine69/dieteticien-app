<footer class="mt-20 py-10 border-t border-gray-100 rounded bg-fuchsia-200">
    <div class="mx-auto px-6 lg:px-8 max-w-7xl text-center">
        <ul class="flex items-center justify-center gap-4 mb-6">
            <li><a href="{{ route('welcome') }}" class="font-semibold text-gray-900 hover:text-gray-500"> A propos</a></li>
            <li><a href="{{ route('contact') }}" class="font-semibold text-gray-900 hover:text-gray-500">Contact</a></li>
           <li><a href="{{ route('terms') }}" class="font-semibold text-gray-900 hover:text-gray-500">Mentions légales</a></li>
            <li><a href="{{ route('privacy') }}" class="font-semibold text-gray-900 hover:text-gray-500">Politique de confidentialité</a></li>
        </ul>
        <p class="text-gray-600">© {{ date('Y') }} {{ config('app.name') }}. Tout droit réservé.</p>
    </div>
</footer>
