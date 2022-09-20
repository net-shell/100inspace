<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('screen_id')
                    ->relationship('screen', 'title', fn (Builder $query) => $query->withoutGlobalScope('visible')),
                Forms\Components\TextInput::make('weight')
                    ->numeric(),
                Forms\Components\TextInput::make('title')
                    ->columnSpan(2)
                    ->maxLength(255),
                Forms\Components\Textarea::make('text')
                    ->rows(10)
                    ->columnSpan(2),
                Forms\Components\Textarea::make('learn_more')
                    ->hint('Leave empty to disable the popup.')
                    ->hintIcon('heroicon-o-information-circle')
                    ->columnSpan(2),
                Forms\Components\TextInput::make('bg_image')
                    ->label('Background Image File'),
                Forms\Components\TextInput::make('bg_video')
                    ->label('Background Video File'),
                Forms\Components\TextInput::make('video')
                    ->url()
                    ->hint('YouTube video URL')
                    ->prefixIcon('heroicon-o-play')
                    ->label('Embed YouTube Video'),
                Forms\Components\TextInput::make('image')
                    ->label('Static Image File'),
                Forms\Components\SpatieMediaLibraryFileUpload::make('gallery')
                    ->columnSpan(2)
                    ->collection('gallery')
                    ->multiple()
                    ->enableReordering(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('screen.title'),
                Tables\Columns\TextColumn::make('title'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('screen')
                    ->relationship('screen', 'title', fn (Builder $query) => $query->withoutGlobalScope('visible')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ReplicateAction::make()->excludeAttributes(['slug']),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
