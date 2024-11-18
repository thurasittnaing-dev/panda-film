<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class VideoQuality extends Model
{
    protected $guarded = [];

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
}
