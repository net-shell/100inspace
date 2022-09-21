<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Screen extends Model
{
    public $timestamps = false;

    protected $fillable = ['title', 'slug', 'weight', 'bg_image'];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('visible', function (Builder $builder) {
            $builder->whereHidden(false);
        });

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('weight', 'asc');
        });
    }
}
