<?php

namespace App\Filament\Resources;

use App\Models\Tag;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\FontWeight;
use Illuminate\Database\Query\Builder;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use App\Filament\Resources\TagResource\Pages;
use Filament\Tables\Columns\Summarizers\Count;

class TagResource extends Resource
{
    protected static ?string $model = Tag::class;

    protected static ?string $navigationIcon = 'heroicon-o-hashtag';

    protected static ?string $navigationGroup = 'Resource';

    public static ?string $navigationLabel = 'Tags Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama')
                    ->required()
                    ->live(onBlur: true)
                    ->maxLength(50)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->regex('/^[a-zA-Z\s]*$/')
                    ->validationMessages([
                        'regex' => 'Nama Hanya bisa huruf a-z dan space, tidak boleh ada angka maupun simbol',
                    ]),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(155)
                    ->hint('Setelah Isi nama, mohon tunggu slug selesai dibuat')
                    ->readOnly()
                    ->unique(ignoreRecord: true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->weight(FontWeight::Bold)
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug'),
                TextColumn::make('count_post')
                    ->label('Count Post')
                    ->state(fn (Tag $record) => $record->RelationPosts()->count()),
                
                    
            ])
            ->defaultSort('name', 'asce')
            ->searchPlaceholder('Search  (Nama)')
            ->filters([
                //
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTags::route('/'),
        ];
    }
}
