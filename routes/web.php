<?php

// Pastikan tidak ada spasi atau karakter apapun sebelum tag <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // Pastikan ini ada dan benar
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;                       // Pastikan Carbon diimpor
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


// Route untuk sitemap.xml yang lengkap
Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create();

    // 1. Tambahkan Halaman Utama (Homepage)
    $latestPostModification = Post::whereNotNull('published_at')
        ->where('published_at', '<=', Carbon::now())
        ->latest('updated_at')
        ->value('updated_at'); // Mengambil hanya nilai updated_at

    $sitemap->add(Url::create(route('home'))
        ->setLastModificationDate($latestPostModification ?? Carbon::now())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
        ->setPriority(1.0));

    // 2. Tambahkan semua Artikel (Posts) yang sudah publish
    Post::whereNotNull('published_at')
        ->where('published_at', '<=', Carbon::now())
        ->orderBy('published_at', 'desc')
        ->get()
        ->each(function (Post $post) use ($sitemap) {
            $sitemap->add(Url::create(route('posts.show', $post))
                ->setLastModificationDate($post->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                ->setPriority(0.9));
        });

    // 3. Tambahkan semua Halaman Kategori yang memiliki post terpublish
    Category::whereHas('posts', function ($query) { // Hanya kategori yang punya post terpublish
        $query->whereNotNull('published_at')->where('published_at', '<=', Carbon::now());
    })
        ->with([
            'posts' => function ($query) { // Eager load posts untuk ambil updated_at terakhir
                $query->whereNotNull('published_at')
                    ->where('published_at', '<=', Carbon::now())
                    ->latest('updated_at'); // Ambil post terbaru berdasarkan updated_at
            }
        ])
        ->get()
        ->each(function (Category $category) use ($sitemap) {
            // Ambil tanggal modifikasi dari post terbaru dalam kategori ini
            // Pastikan $category->posts tidak null dan memiliki elemen pertama
            $lastModificationDateInCategory = $category->posts->isNotEmpty() ? $category->posts->first()->updated_at : Carbon::now();

            $sitemap->add(Url::create(route('categories.show', $category))
                ->setLastModificationDate($lastModificationDateInCategory)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8));
        });

    return $sitemap;
})->name('sitemap');

// Anda bisa menambahkan route /ping di sini jika masih ingin menggunakannya untuk tes
Route::get('/ping-sederhana', function () {
    return 'Pong dari Ping Sederhana!';
});
// Route untuk halaman-halaman blog utama
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/categories/{category:slug}', [PostController::class, 'category'])->name('categories.show');
