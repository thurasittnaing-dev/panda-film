<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Traits\Filters\UserFilterQuery;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, UserFilterQuery;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'fullname',
        'password',
        'dev_mode',
        'created_by',
        'updated_by',
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


    protected static function booted()
    {
        parent::booted();

        static::creating(function ($user) {
            // Set the 'created_by' field to the authenticated user's ID
            if (Auth::check()) {
                $user->created_by = Auth::id();
            }
        });

        static::updating(function ($user) {
            // Set the 'updated_by' field to the authenticated user's ID
            if (Auth::check()) {
                $user->updated_by = Auth::id();
            }
        });
    }


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

    public function createdByUser()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updatedByUser()
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
    public function scopeFilterQuery(Builder $builder): Builder
    {
        return $this->filter($builder);
    }
}
