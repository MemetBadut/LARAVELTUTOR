<x-layout :title="$title">

    <x-slot:dashboard> {{ $dashboard }} </x-slot:dashboard>

    @foreach ($posts as $post)
        <article class="py-8 max-w-md border-b border-amber-950">
            <a href="{{ route('posts.detail', ['slug' => $post['slug']]) }}" class="hover:underline">
                <h2 class="mb-3 text-3xl font-bold text-gray"> {{ $post['judul'] }} </h2>
            </a>
            <div class="text-base text-gray-300">
                <a href="#"> {{ $post['author'] }} </a> | 23 Maret 2029
            </div>
            <p class="text-justify my-3.5 font-light">
                {{ Str::limit($post['body'], 150) }}
            </p>
            <a href="{{ route('posts.detail', ['slug' => $post['slug']]) }}" class="font-medium text-blue-500">Read More &raquo;</a>
        </article>
    @endforeach



</x-layout>
