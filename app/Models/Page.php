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

    protected $fillable = ['title', 'text', 'learn_more', 'image', 'video', 'bg_video', 'weight', 'screen_id'];

    protected $appends = ['bg_poster'];

    public function screen()
    {
        return $this->belongsTo(Screen::class)->withoutGlobalScopes();
    }

    public function getBgPosterAttribute()
    {
        $filename = str_replace('.mp4', '.jpg', $this->attributes['bg_video']);
        return url('/videos/posters/' . $filename);
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
