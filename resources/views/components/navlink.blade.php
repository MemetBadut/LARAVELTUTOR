@props(['route'])
@props(['active' => false])

<a href="{{ route($route) }}" aria-current="{{ $active ? 'page' : false }}"
    class="{{ request()->routeIs($route) ? ' bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium "> {{ $slot }} </a>
