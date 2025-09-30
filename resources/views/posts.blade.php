<x-layout :title="$title">

    <x-slot:dashboard> {{ $dashboard }} </x-slot:dashboard>

    @foreach ($posts as $post)
        <article class="py-8 md:max-w-screen border-b border-gray-400">
            <a href="{{ route('posts.detail', ['post' => $post['slug']]) }}" class="hover:underline">
                <h2 class="mb-3 text-3xl font-bold text-gray"> {{ $post['judul'] }} </h2>
            </a>
            <div>
                By
                <a href="/authors/{{ $post->author->username }}" class="hover:underline text-base text-gray-300"> {{ $post->author->name }} </a>
                in
                <a href="/authors/{{ $post->author->id }}" class="hover:underline text-base text-gray-300"> {{ $post->author->name }} </a> |
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="text-justify my-3.5 font-light">
                {{ Str::limit($post['body'], 248) }}
            </p>
            <a href="{{ route('posts.detail', ['post' => $post['slug']]) }}" class="font-medium text-blue-500">Read
                More &raquo;</a>
        </article>
    @endforeach



</x-layout>
