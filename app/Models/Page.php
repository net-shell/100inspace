<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Page extends Model implements HasMedia
{
    use InteractsWithMedia;

    public $timestamps = false;

    protected $fillable = ['title', 'text', 'image', 'video', 'bg_video', 'weight', 'screen_id'];

    public function screen()
    {
        return $this->belongsTo(Screen::class)->withoutGlobalScopes();
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('screen_id', 'asc')->orderBy('weight', 'asc');
        });
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallery');
    }
}
