@props(['disabled' => false])
<label class="inline-flex items-center gap-2">
    <input type="checkbox" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-0 rounded-sm shadow-sm']) !!}>
        <span class="text-sm text-gray-600">{{__('Public (Tout le monde peut voir la recette)') }}</span>
</label>
