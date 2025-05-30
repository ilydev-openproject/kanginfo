<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> {{-- Tambahkan locale --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <meta name="description" content="{{ $post->meta_description }}">

    {{-- Open Graph Tags --}}
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{{ $post->meta_description }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url()->current() }}" />
    @if ($post->featured_image_path)
        {{-- Pastikan APP_URL di .env sudah benar untuk URL absolut --}}
        <meta property="og:image" content="{{ asset(Storage::url($post->featured_image_path)) }}" />
    @endif
    {{-- Akhir Open Graph Tags --}}

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto max-w-4xl py-8 px-4 sm:px-6 lg:px-8"> {{-- Tambahkan padding responsif --}}
        <article class="bg-white p-6 rounded-lg shadow-md">
            <div class="text-sm text-gray-600 mb-4">
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <span class="mx-2">&raquo;</span>
                <a href="{{ route('categories.show', $post->category) }}"
                    class="hover:underline">{{ $post->category->name }}</a>
            </div>

            {{-- Tampilkan Featured Image Jika Ada --}}
            @if ($post->featured_image_path)
                <img src="{{ Storage::url($post->featured_image_path) }}" alt="{{ $post->title }}"
                    class="w-full h-auto max-h-96 object-cover rounded-lg mb-6 shadow"> {{-- Styling gambar --}}
            @endif

            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">{{ $post->title }}</h1>
            <div class="text-sm text-gray-600 mb-6">
                <span>Dipublikasikan pada {{ $post->published_at->format('d M Y, H:i') }}</span> {{-- Tambahkan waktu
                --}}
            </div>

            <div class="prose max-w-none lg:prose-lg xl:prose-xl"> {{-- Ukuran prose responsif --}}
                {!! $post->body !!}
            </div>
        </article>
    </div>

</body>

</html>