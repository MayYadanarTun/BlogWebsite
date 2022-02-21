<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }
    use HasFactory;
}
