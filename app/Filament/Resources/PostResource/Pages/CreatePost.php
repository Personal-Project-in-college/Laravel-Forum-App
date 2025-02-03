<?php

namespace App\Filament\Resources\PostResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Auth;
use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getTitle(): string
    {
        // Cek apakah user yang login adalah admin atau bukan
        if (Auth::user() && Auth::user()->hasRole('super_admin')) {
            return 'Posts Data'; // Mengubah label untuk user admin
        }

        return 'My Post'; // Label default jika bukan admin
    }
}
