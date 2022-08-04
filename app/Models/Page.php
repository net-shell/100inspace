<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Page extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'text', 'image', 'video', 'bg_video', 'weight', 'screen_id'];

    public function screen()
    {
        return $this->belongsTo(Screen::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('screen_id', 'asc')->orderBy('weight', 'asc');
        });
    }
}
