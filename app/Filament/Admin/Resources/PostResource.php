<?php

namespace App\Filament\Admin\Resources;

use App\Models\Tag;
use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PostResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;
use Filament\Actions\Action;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Spatie\MediaLibrary\Conversions\ConversionCollection;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Select::make('category_id')
                        ->options(Category::all()->pluck('name', 'id'))
                        ->searchable(),
                    Select::make('tags')
                        ->label('Tags')
                        ->relationship('tags', 'nama_tag')
                        ->options(Tag::all()->pluck('nama_tag', 'id'))
                        ->searchable()
                        ->multiple()
                        ->required(),
                    Select::make('status')
                        ->label('Publish?')
                        ->options([
                            'draft' => 'Draft',
                            'published' => 'Published',
                        ])
                        ->native(false)
                        ->required(),

                ])
                    ->columns(1)
                    ->columnSpan(1),
                Section::make([
                    TextInput::make('title')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')
                        ->unique(ignoreRecord: true)
                        ->required(),
                    Textarea::make('meta_description')
                        ->unique(ignoreRecord: true)
                        ->maxLength(255)
                        ->required(),
                    SpatieMediaLibraryFileUpload::make('Gambar')
                        ->disk('gambar')
                        ->collection('gambar')
                        ->openable()
                        ->image()
                        ->imageEditor()
                        ->required(),
                    RichEditor::make('content'),
                    Hidden::make('user_id')
                        ->default(fn() => Filament::auth()->user()->id)
                        ->required(),
                ])
                    ->columnSpan(3)
            ])
            ->columns(4);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->limit(20),
                SpatieMediaLibraryImageColumn::make('gambar')
                    ->collection('gambar')
                    ->width(32)
                    ->height(32)
                    ->circular(),
                TextColumn::make('created_at')
                    ->since(),
                TextColumn::make('user.name'),
                TextColumn::make('status')
                    ->icon(
                        fn($record) =>
                        $record->status === 'draft'
                        ? 'heroicon-o-archive-box'
                        : 'heroicon-o-check-circle'
                    )
                    ->badge(
                        fn($record) =>
                        $record->status === 'draft'
                        ? 'warning'
                        : 'success'
                    )
                    ->getStateUsing(fn($record) => ucfirst($record->status))
                    ->width(10),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
