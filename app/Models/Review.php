<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_mark',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withPivot('mark', 'comment')->withTimestamps();
    }

    public function canEdit(?int $user_id = null)
    {
        // admins can always edit
        if (Auth::user()->is_admin) {
            return true;
        }

        // If no user is given, use the logged in user
        if ($user_id === null) {
            $user_id = Auth::id();
        }

        // Only author is allowed to edit
        return $this->user_id === $user_id;
    }
}
