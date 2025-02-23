<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser, HasAvatar
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasUuids, HasFactory, HasRoles, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $keyType = 'string';
    public $incrementing = false;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'id',
        'nim',
        'name',
        'slug',
        'email',
        'password',
        'avatar',
        'is_banned',
    ];
    //Relationships
    public function RelationPosts(): HasMany
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_banned == 0;
    }

    public function getFilamentAvatarUrl(): ?string
    {
        if ($this->avatar) {
            return env('APP_URL') . '/storage/' . $this->avatar;
        }
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&background=random&bold=true';
    }

    public function getAvatarUrlAttribute(): string
    {
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&background=random&bold=true';
    }

    public function getShortNameAttribute()
    {
        $nameParts = explode(' ', $this->name);
        $shortName = implode(' ', array_slice($nameParts, 0, 2)); // Ambil 2 kata pertama
        $initials = array_map(fn($word) => strtoupper(substr($word, 0, 1)), array_slice($nameParts, 2)); // Inisial sisanya
        return $shortName . (!empty($initials) ? ' ' . implode('', $initials) : '');
    }

}
