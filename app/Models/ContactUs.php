<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function markViewed()
    {
        $this->update(['read_at' => now()]);
        return $this;
    }

    public function viewed()
    {
        return $this->read_at ? true : false;
    }
}
