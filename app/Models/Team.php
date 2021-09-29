<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function photoUrl()
    {
        return $this->photo
            ? Storage::url($this->photo)
            : 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&color=fff&background=4f46e5';
    }

    public function scopePositioned($query)
    {
        return $query->orderByRaw('ISNULL(position), position ASC');
    }

    public static function getNextPosition()
    {
        return Team::max('position') + 1;
    }
}
