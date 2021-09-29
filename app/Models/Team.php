<?php

namespace App\Models;

use App\Traits\HasPosition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Team extends Model
{
    use HasFactory, HasPosition;

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

}
