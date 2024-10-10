<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\support\Str;


class Technology extends Model
{
    use HasFactory;

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }
}
