<x-layout>
    <x-slot:header>{{ $header }}</x-slot:header>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/blog/{{ $post['slug'] }}" class="hover:cursor-pointer">
                <h2 
                    class="mb-1 text-3xl tracking-tight font-bold text-gray-900"
                >
                    {{ $post['title'] }}   
                </h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | <span>1 January 2024</span>
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($post['body'], 140) }}
            </p>
            <a href="/blog/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach

</x-layout>