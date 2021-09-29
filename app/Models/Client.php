<?php

namespace App\Models;

use App\Traits\HasPosition;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Client extends Model
{
    use HasFactory, HasPosition;

    protected $guarded = [];

    public function logoUrl()
    {
        return Storage::url($this->logo);
    }
}
