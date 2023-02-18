@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium mb-2 text-lg text-gray-500 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
