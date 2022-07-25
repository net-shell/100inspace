<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Screen extends Model
{
    public $timestamps = false;

    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}
