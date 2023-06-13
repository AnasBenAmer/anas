@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-black	mb-3 font-serif']) }}>
    {{ $value ?? $slot }}
</label>
