<?php

namespace App\Models;

use Spatie\Url\Url;
use Illuminate\Support\Str;
use App\Models\Scopes\SortedVideos;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[ScopedBy([SortedVideos::class])]
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
        'playlist_id',
        'url',
        'published_at',
        'position',
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


    public function playlist(): BelongsTo
    {
        return $this->belongsTo(Playlist::class);
    }

    public function channel(): BelongsTo
    {
        return $this->belongsTo(Channel::class);
    }

    public static function getForm(): array
    {
        return [
            TextInput::make('title')
                ->maxLength(255),
            TextInput::make('slug')
                ->maxLength(255),
            Select::make('playlist_id')
                ->relationship('playlist', 'name'),
            Select::make('channel_id')
                ->relationship('channel', 'name'),
            TextInput::make('url')
                ->required()
                ->maxLength(255),
        ];
    }
}
