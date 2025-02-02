<?php

namespace App\Filament\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Http\Responses\Auth\LoginResponse;
use Filament\Pages\Auth\Login as BaseLogin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class LoginUsingNim extends BaseLogin
{
    protected function getForms(): array
    {
        return [
            'form' => $this->makeForm()
                ->schema([
                    TextInput::make('login')
                        ->label('NIM')
                        ->required()
                        ->autocomplete()
                        ->autofocus(),
                    TextInput::make('password')
                        ->label('Password')
                        ->password()
                        ->required()
                        ->revealable()
                        ->autocomplete('current-password'),
                ])
                ->statePath('data'),
        ];
    }

    public function authenticate(): LoginResponse
    {
        $data = $this->form->getState();
        
        $user = User::where('nim', $data['login'])->first();

        if (!$user) {
            throw ValidationException::withMessages(['data.login' => 'NIM tidak terdaftar di sistem.']);
        }

        if ($user->is_banned) {
            throw ValidationException::withMessages(['data.login' => 'Akun Anda telah dibanned. Silakan hubungi admin.']);
        }

        if (!Auth::attempt(['nim' => $data['login'], 'password' => $data['password']], $data['remember'] ?? false)) {
            throw ValidationException::withMessages(['data.login' => 'NIM atau password salah.']);
        }

        session()->regenerate();
        return app(LoginResponse::class);
    }
}
