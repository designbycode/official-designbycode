@props(['active' => false])

<a {{ $attributes->class([
    'inline-flex items-center px-4 py-4 text-sm font-medium ',
    'text-gray-500' => !$active,
    'text-primary-500' => $active,
]) }}>
    {{ $slot }}
</a>
