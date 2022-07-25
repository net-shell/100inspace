<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'text', 'image', 'weight', 'screen_id'];

    public function screen()
    {
        return $this->belongsTo(Screen::class);
    }
}
