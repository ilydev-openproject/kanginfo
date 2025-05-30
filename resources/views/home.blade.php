<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog SEO Teknis</title>
    {{-- Idealnya, meta description untuk homepage juga ada --}}
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto max-w-4xl py-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Artikel Terbaru</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8"> {{-- Gunakan grid untuk layout --}}
            @forelse ($posts as $post) {{-- Gunakan forelse untuk kasus jika tidak ada post --}}
                <article class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col"> {{-- Tambahkan overflow-hidden
                    dan flex --}}
                    @if ($post->featured_image_path)
                        <a href="{{ route('posts.show', $post) }}">
                            <img src="{{ Storage::url($post->featured_image_path) }}" alt="{{ $post->title }}"
                                class="w-full h-48 object-cover"> {{-- Gambar thumbnail --}}
                        </a>
                    @endif
                    <div class="p-6 flex flex-col flex-grow"> {{-- Tambahkan flex-grow --}}
                        <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-2">
                            <a href="{{ route('posts.show', $post) }}" class="hover:text-blue-600">
                                {{ $post->title }}
                            </a>
                        </h2>
                        <div class="text-sm text-gray-600 mb-4">
                            <span>{{ $post->published_at->format('d M Y') }}</span>
                            <span class="mx-2">&bull;</span>
                            <a href="{{ route('categories.show', $post->category) }}"
                                class="text-blue-500 hover:underline">{{ $post->category->name }}</a>
                        </div>
                        <p class="text-gray-700 mb-4 flex-grow"> {{-- Tambahkan flex-grow --}}
                            {{ Str::limit($post->meta_description, 150) }} {{-- Batasi panjang meta description --}}
                        </p>
                        <a href="{{ route('posts.show', $post) }}"
                            class="text-blue-600 hover:text-blue-800 font-semibold self-start">Baca Selengkapnya &rarr;</a>
                        {{-- Tambahkan self-start --}}
                    </div>
                </article>
            @empty
                <p class="text-gray-700 md:col-span-2 text-center">Belum ada artikel yang dipublikasikan.</p>
            @endforelse
        </div>

        <div class="mt-12"> {{-- Tambahkan margin atas lebih besar --}}
            {{ $posts->links() }}
        </div>
    </div>

</body>

</html>