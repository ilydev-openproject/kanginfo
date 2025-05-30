<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel dalam Kategori: {{ $category->name }}</title>
    {{-- Idealnya, meta description untuk halaman kategori juga ada --}}
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto max-w-4xl py-8 px-4 sm:px-6 lg:px-8">
        <div class="mb-6 text-sm text-gray-600">
            <a href="{{ route('home') }}" class="hover:underline">Home</a>
            <span class="mx-2">&raquo;</span>
            <span>Kategori</span>
        </div>
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8 text-center">
            Kategori: <span class="text-blue-600">{{ $category->name }}</span>
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse ($posts as $post)
                <article class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                    @if ($post->featured_image_path)
                        <a href="{{ route('posts.show', $post) }}">
                            <img src="{{ Storage::url($post->featured_image_path) }}" alt="{{ $post->title }}"
                                class="w-full h-48 object-cover">
                        </a>
                    @endif
                    <div class="p-6 flex flex-col flex-grow">
                        <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-2">
                            <a href="{{ route('posts.show', $post) }}" class="hover:text-blue-600">
                                {{ $post->title }}
                            </a>
                        </h2>
                        <div class="text-sm text-gray-600 mb-4">
                            <span>{{ $post->published_at->format('d M Y') }}</span>
                        </div>
                        <p class="text-gray-700 mb-4 flex-grow">
                            {{ Str::limit($post->meta_description, 150) }}
                        </p>
                        <a href="{{ route('posts.show', $post) }}"
                            class="text-blue-600 hover:text-blue-800 font-semibold self-start">Baca Selengkapnya &rarr;</a>
                    </div>
                </article>
            @empty
                <p class="text-gray-700 md:col-span-2 text-center">Belum ada artikel dalam kategori ini.</p>
            @endforelse
        </div>

        <div class="mt-12">
            {{ $posts->links() }}
        </div>
    </div>

</body>

</html>