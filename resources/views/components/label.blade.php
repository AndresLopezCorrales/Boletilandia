@props(['value'])

<!--Login page-->
<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-white']) }}>
    {{ $value ?? $slot }}
</label>
