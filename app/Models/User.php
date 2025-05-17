<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Gate;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "name",
        "family",
        "phone_number",
        "email",
        "role",
        "locale",
        "merchant_id",
        "email_verified_at",
        "password",
        "is_blocked",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function merchants(): BelongsToMany
    {
        return $this->belongsToMany(Merchant::class, "user_merchants", "user_id", "merchant_id");
    }

    public function isSuperAdmin()
    {
        return Gate::allows("super_admin");
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;

        return $this->isSuperAdmin();
    }
}
