<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Models\Category;
use Illuminate\Support\Str;
use Filament\Pages\Actions\Action;
use App\Filament\Resources\PostResource;
use App\Models\Tag;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Tambah Kategori')
                ->label('Tambah Kategori')
                ->color('primary')
                ->modalHeading('Tambah Kategori Baru')
                ->form([
                    TextInput::make('name')
                        ->label('Nama Kategori')
                        ->required()
                        ->live(onBlur: true)
                        ->unique(Category::class, 'name')
                        ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state)))
                        ->validationMessages([
                            'unique' => 'Kategori sudah di pakai!'
                        ]),
                    TextInput::make('slug')
                        ->unique(Category::class, 'slug')
                        ->readOnly()
                        ->validationMessages([
                            'unique' => 'Kategori sudah di pakai!'
                        ]),
                ])
                ->action(function (array $data) {
                    // Simpan ke database (Contoh untuk model Category)
                    Category::create([
                        'name' => $data['name'],
                        'slug' => $data['slug'],
                    ]);

                    // Kirim notifikasi sukses
                    Notification::make()
                        ->title('Kategori berhasil ditambahkan!')
                        ->success()
                        ->send();
                }),
            Action::make('Tambah Tag')
                ->label('Tambah Tag')
                ->color('primary')
                ->modalHeading('Tambah Tag Baru')
                ->form([
                    TextInput::make('nama_tag')
                        ->label('Nama Tag')
                        ->required()
                        ->live(onBlur: true)
                        ->unique(Tag::class, 'nama_tag')
                        ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state)))
                        ->validationMessages([
                            'unique' => 'Tag sudah di pakai!'
                        ]),
                    TextInput::make('slug')
                        ->unique(Tag::class, 'slug')
                        ->readOnly()
                        ->validationMessages([
                            'unique' => 'Tag sudah di pakai!'
                        ]),
                ])
                ->action(function (array $data) {
                    // Simpan ke database (Contoh untuk model Tag)
                    Tag::create([
                        'nama_tag' => $data['nama_tag'],
                        'slug' => $data['slug'],
                    ]);

                    // Kirim notifikasi sukses
                    Notification::make()
                        ->title('Tag berhasil ditambahkan!')
                        ->success()
                        ->send();
                }),
        ];
    }
}
