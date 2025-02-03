<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\FontWeight;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Support\Enums\IconPosition;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Filament\Resources\UserResource\Pages;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static ?string $navigationGroup = 'Resource';

    public static function getNavigationLabel(): string
    {
        // Cek apakah user yang login adalah admin atau bukan
        if (Auth::user() && Auth::user()->hasRole('super_admin')) {
            return 'Users Data'; // Mengubah label untuk user admin
        }

        return 'Profile'; // Label default jika bukan admin
    }

    public static function getPluralModelLabel(): string
    {
        // Cek apakah user yang login adalah admin atau bukan
        if (Auth::user() && Auth::user()->hasRole('super_admin')) {
            return 'Users Data'; // Mengubah label untuk user admin
        }

        return 'Profile'; // Label default jika bukan admin
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Fieldset::make('Profile')
                            ->schema([
                                FileUpload::make('avatar')
                                    ->label('Avatar')
                                    ->hint('Avatar, Memiliki batas ukuran file hanya 1024 Kb')
                                    ->alignCenter()
                                    ->avatar()
                                    ->image()
                                    ->imageEditor()
                                    ->circleCropper()
                                    ->maxSize(1024)
                                    ->uploadingMessage('Uploading Photo...')
                                    ->directory('DataUser/Profile/')
                                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, callable $get): string {
                                        $nim = $get('nim'); // Ambil nilai field `nim` dari state
                                        return "Avatar-{$nim}." . $file->getClientOriginalExtension();
                                    }),
                            ])->columns(1),
                        Fieldset::make('Biodata')
                            ->schema([
                                TextInput::make('nim')
                                    ->label('NIM')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->numeric()
                                    ->regex('/^[0-9]*$/')
                                    ->validationMessages([
                                        'unique' => 'NIM sudah digunakan mahasiswa lain',
                                        'regex' => 'NIM Hanya Bisa angka 0-9, tidak boleh ada simbol !',
                                    ]),
                                TextInput::make('name')
                                    ->label('Nama')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                    ->regex('/^[a-zA-Z\s]*$/')
                                    ->validationMessages([
                                        'regex' => 'Nama Hanya bisa huruf a-z dan space, tidak boleh ada angka maupun simbol',
                                    ]),
                                TextInput::make('email')
                                    ->label('Email')
                                    ->required()
                                    ->email()
                                    ->unique(ignoreRecord: true)
                                    ->validationMessages([
                                        'email' => 'Email perlu simbol @',
                                    ]),
                                TextInput::make('slug')
                                    ->label('Slug')
                                    ->hint('Setelah Isi nama, mohon tunggu slug selesai dibuat')
                                    ->readOnly()
                                    ->required(),
                            ]),
                        Fieldset::make('Security')
                            ->schema([
                                TextInput::make('password')
                                    ->label('Password')
                                    ->required(fn(Page $livewire): bool => $livewire instanceof CreateRecord)
                                    ->hint('Password Minimal 8 digit')
                                    ->minLength(8)
                                    ->password()
                                    ->revealable()
                                    ->dehydrateStateUsing(fn(string $state): string => Hash::make($state))
                                    ->dehydrated(fn(?string $state): bool => filled($state)),
                                Select::make('roles')
                                    ->label('Role')
                                    ->required()
                                    ->native(false)
                                    ->relationship('roles', 'name')
                                    ->disabled(fn() => auth()->user()->hasRole('user')), // disabled jika user yang login role nya user
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nim')
                    ->label('NIM')
                    ->searchable()
                    ->weight(FontWeight::Bold),
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('email')
                    ->label('Email'),
                TextColumn::make('roles.name')
                    ->label('Role')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'super_admin' => 'danger',
                        'user' => 'success',
                    })
                    ->placeholder('No Role'),
                ToggleColumn::make('is_banned')
                    ->label('Banned')
                    ->tooltip("On : Banned | Off : Unbanned")
                    ->hidden(fn() => auth()->user()->hasRole('user')),
            ])
            ->defaultSort('nim', 'asce')
            ->searchPlaceholder('Search (NIM, Nama)')
            ->filters([
                SelectFilter::make('is_banned')
                    ->label('Status')
                    ->hidden(fn() => auth()->user()->hasRole('user'))
                    ->native(false)
                    ->options([
                        '1' => 'Banned',
                        '0' => 'Unbanned',
                    ]),
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
                    Tables\Actions\BulkAction::make('Accept')
                        ->label('Change Status Banned')
                        ->icon('heroicon-m-pencil-square')
                        ->hidden(fn() => auth()->user()->hasRole('user'))
                        ->requiresConfirmation()
                        ->form([
                            Select::make('Status')
                                ->label('Change Status Banned')
                                ->native(false)
                                ->options([
                                    '1' => 'Ban Users',
                                    '0' => 'UnBan Users',
                                ])
                                ->required(),
                        ])
                        ->action(function (Collection $records, array $data) {
                            $records->each(function ($records) use ($data) {
                                User::where('id', $records->id)->update(['is_banned' => $data['Status']]);
                            });

                            Notification::make()
                                ->title('Status Ban berhasil diubah!')
                                ->success()
                                ->body('Status telah diperbarui untuk ' . $records->count() . ' Mahasiswa.')
                                ->send();
                        }),
                    Tables\Actions\BulkAction::make('Role')
                        ->label('Add Role Users')
                        ->icon('heroicon-m-pencil-square')
                        ->hidden(fn() => auth()->user()->hasRole('user'))
                        ->requiresConfirmation()
                        ->form([
                            Select::make('role')
                                ->label('Add Role Users')
                                ->native(false)
                                ->options([
                                    'user' => 'User',
                                ])
                                ->required(),
                        ])
                        ->action(function (Collection $records, array $data) {
                            $records->each(function ($record) use ($data) {
                                $record->syncRoles([$data['role']]); // Mengganti role user
                            });
                        }),

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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        // Periksa apakah user admin
        if (Auth::user()->hasRole('super_admin')) {
            return $query;
        }

        return $query->where('id', Auth::user()->id);
    }
}
