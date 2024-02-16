<?php

namespace App\Models;

use Spatie\Url\Url;
use Illuminate\Support\Str;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Playlist extends Model
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
        'show_id',
        'channel_id',
        'url',
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

    protected function url(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => [
                'url' => $value,
                'id' => Url::fromString($value)->getQueryParameter('list'),
            ]
        );
    }

    public function show(): BelongsTo
    {
        return $this->belongsTo(Show::class);
    }

    public function channel(): BelongsTo
    {
        return $this->belongsTo(Channel::class);
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }

    public static function getForm($showId = null): array
    {
        return [
            TextInput::make('title')
                ->maxLength(255),
            TextInput::make('slug')
                ->maxLength(255),
            Select::make('show_id')
                ->hidden(function () use ($showId) {
                    return $showId !== null;
                })
                ->relationship('show', 'name')
                ->preload()
                ->searchable()
                ->required(),
            TextInput::make('url')
                ->required()
                ->maxLength(255),
        ];
    }
}
