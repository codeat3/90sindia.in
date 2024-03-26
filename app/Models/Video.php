<?php

namespace App\Models;

use Spatie\Url\Url;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\Scopes\SortedVideos;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

// #[ScopedBy([SortedVideos::class])]
class Video extends Model
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
        'description',
        'url',
        'published_at',
        'position',
        'meta',
    ];

    protected $casts = [
        'meta' => 'json',
    ];

    public $incrementing = false;

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => [
                'title' => $value,
                'slug' => Str::slug($value),
            ]
        );
    }

    protected function url(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => [
                'url' => $value,
                'id' => Url::fromString($value)->getQueryParameter('v'),
            ]
        );
    }

    protected function thumbnail(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                $metaArr = Arr::get($attributes, 'meta');
                return Arr::get($metaArr, 'snippet.thumbnails.standard.url');
            },
        );
    }

    public function playlists(): BelongsToMany
    {
        return $this->belongsToMany(Playlist::class);
    }


    public static function getForm(): array
    {
        return [
            TextInput::make('title')
                ->maxLength(255),
            TextInput::make('slug')
                ->maxLength(255),
            Select::make('playlist_id')
                ->relationship('playlist', 'title'),
            Select::make('channel_id')
                ->relationship('channel', 'title'),
            TextInput::make('url')
                ->required()
                ->maxLength(255),
        ];
    }
}
