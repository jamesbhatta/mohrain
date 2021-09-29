<?php
namespace App\Traits;

trait HasPosition
{
    public function scopePositioned($query)
    {
        return $query->orderByRaw('ISNULL(position), position ASC');
    }

    public static function getNextPosition()
    {
        return self::max('position') + 1;
    }
}