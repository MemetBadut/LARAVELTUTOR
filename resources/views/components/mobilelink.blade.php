@props(['route'])
@props(['active' => false])

<a href="{{ route($route) }}" aria-current="{{ $active ? 'page' : false }}"
    class="{{ request()->route($route) ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">
    {{ $slot }}
</a>
