<?php

namespace App\Filament\Resources\UserResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Auth;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getTitle(): string
    {
        // Cek apakah user yang login adalah admin atau bukan
        if (Auth::user() && Auth::user()->hasRole('super_admin')) {
            return 'Users Data'; // Mengubah label untuk user admin
        }

        return 'Profile'; // Label default jika bukan admin
    }
}
