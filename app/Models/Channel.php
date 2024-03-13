<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Channel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'title',
        'slug',
        'url',
        'custom_url',
    ];

    public $incrementing = false;

    protected function title(): Attribute
    {
        return Attribute::make(
            set: fn (?string $value) => [
                'title' => $value,
                'slug' => !is_null($value) ? Str::slug($value) : null,
            ]
        );
    }

    public function playlists(): HasMany
    {
        return $this->hasMany(Playlist::class);
    }

    public function videos(): HasManyThrough
    {
        return $this->hasManyThrough(Video::class, Playlist::class);
    }
}
