<?php

namespace App\Filament\Resources\ShowResource\RelationManagers;

use App\Models\Playlist;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlaylistsRelationManager extends RelationManager
{
    protected static string $relationship = 'playlists';

    public function form(Form $form): Form
    {
        return $form
            ->schema(Playlist::getForm($this->getOwnerRecord()->id));
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('url')
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title'),

                Tables\Columns\TextColumn::make('channel.title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('videos_count')
                    ->counts('videos')
                    ->numeric(),
                Tables\Columns\TextColumn::make('url'),

            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
