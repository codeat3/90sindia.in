<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Show extends Model
{
    use HasFactory;
    use HasUlids;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
    ];


    protected function name(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => [
                'name' => $value,
                'slug' => Str::slug($value),
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

    public static function getForm(): array
    {
        return [
            TextInput::make('name')
                ->required()
                ->maxLength(255),
        ];
    }
}
