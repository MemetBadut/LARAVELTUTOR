<x-layout :title="$title">

    <x-slot:dashboard> {{ $dashboard }} </x-slot:dashboard>


    <article class="py-8 max-w-md border-b border-amber-950">
        <h2 class="mb-3 text-3xl font-bold text-gray"> {{ $post['judul'] }} </h2>
        <div class="text-base text-gray-300">
            <a href="#"> {{ $post['author'] }} </a> | 23 Maret 2029
        </div>
        <p class="text-justify my-3.5 font-light">
            {{ $post['body'] }}
        </p>
        <a href="{{ route('posts') }}" class="font-medium text-blue-500">
            &laquo;Back to Posts
        </a>
    </article>




</x-layout>
