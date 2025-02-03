<?php

namespace App\Filament\Resources;

use App\Models\Tag;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\FontWeight;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\PostResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';

    protected static ?string $navigationGroup = 'Resource';

    public static function getNavigationLabel(): string
    {
        // Cek apakah user yang login adalah admin atau bukan
        if (Auth::user() && Auth::user()->hasRole('super_admin')) {
            return 'Posts Data'; // Mengubah label untuk user admin
        }

        return 'My Post'; // Label default jika bukan admin
    }

    public static function getPluralModelLabel(): string
    {
        // Cek apakah user yang login adalah admin atau bukan
        if (Auth::user() && Auth::user()->hasRole('super_admin')) {
            return 'Posts Data'; // Mengubah label untuk user admin
        }

        return 'My Post'; // Label default jika bukan admin
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Fieldset::make('Main Image')
                            ->schema([
                                FileUpload::make('cover_photo_path')
                                    ->label('')
                                    ->hint('Maximum file size limit is only 1024 Kb')
                                    ->image()
                                    ->imageEditor()
                                    ->maxSize(1024)
                                    ->uploadingMessage('Uploading Image...')
                                    ->directory('DataPost/MainImage')
                                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, callable $get): string {
                                        $slug = $get('slug'); // Ambil nilai field `slug` dari state
                                        return "MainImage-{$slug}." . $file->getClientOriginalExtension();
                                    }),
                            ])->columns(1),
                        Fieldset::make('Header')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title')
                                    ->required()
                                    ->maxLength(100)
                                    ->unique(ignoreRecord: true)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                    ->regex('/^[0-9a-zA-Z\s]*$/')
                                    ->validationMessages([
                                        'unique' => 'Title sudah digunakan untuk post lain',
                                        'regex' => 'Title Hanya bisa huruf a-z dan space, tidak boleh ada simbol',
                                    ]),
                                TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->maxLength(155)
                                    ->hint('Wait for the Slug to finish being created from the title')
                                    ->readOnly()
                                    ->unique(ignoreRecord: true),
                                Select::make('RelationTags.tag_id')
                                    ->label('Select Tag')
                                    ->required()
                                    ->relationship('RelationTags', 'name') // Gunakan relationship agar otomatis tersimpan di post_has_tags
                                    ->multiple()
                                    ->columnSpanFull()
                                    ->preload()
                                    ->native(false),
                            ]),
                        Fieldset::make('Body')
                            ->schema([
                                RichEditor::make('body')
                                    ->label('Content')
                                    ->required()
                                    ->columnSpanFull()
                                    ->hint('If inserting a file, wait for it to finish uploading')
                                    ->fileAttachmentsDisk('public') // Simpan di storage/app/public/
                                    ->fileAttachmentsDirectory('DataPost/ContentImage'),
                            ]),
                    Hidden::make('user_id') // Disembunyikan tapi tetap terisi otomatis
                        ->default(Auth::id()),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->weight(FontWeight::Bold)
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('RelationUsers.name')
                    ->label('Author')
                    ->searchable(),
                TextColumn::make('RelationTags.name')
                    ->label('Tag')
                    ->wrap(),
                ImageColumn::make('cover_photo_path')
                    ->label('Cover Image')
                    ->placeholder('No Image'),
            ])
            ->defaultSort('title', 'asce')
            ->searchPlaceholder('Search  (Title, Author)')
            ->filters([
                SelectFilter::make('filter_by_tag')
                    ->label('Filter by Tag')
                    ->options(Tag::pluck('name', 'id')) // Ambil daftar tag
                    ->multiple()
                    ->preload()
                    ->native(false)
                    ->query(function ($query, array $data) {
                        if (!empty($data['values'])) {
                            $query->whereHas('RelationTags', function ($q) use ($data) {
                                $q->whereIn('tags.id', $data['values']);
                            }, '=', count($data['values'])); // Memastikan semua tag terpilih ada di post
                        }
                    }),
            ])
            
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
                    ->tooltip('Actions')
                    ->size(ActionSize::Small)
                    ->icon('heroicon-m-ellipsis-horizontal'),
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
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        // Periksa apakah user admin
        if (Auth::user()->hasRole('super_admin')) {
            return $query;
        }

        return $query->where('user_id', Auth::user()->id);
    }
}
