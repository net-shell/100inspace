<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScreenResource\Pages;
use App\Filament\Resources\ScreenResource\RelationManagers;
use App\Models\Screen;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScreenResource extends Resource
{
    protected static ?string $model = Screen::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpan(2)
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('weight')
                    ->numeric(),
                Forms\Components\Checkbox::make('hidden')
                    ->label('Show In Menu'),
                Forms\Components\TextInput::make('bg_image')
                    ->label('Background Image File')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\BooleanColumn::make('hidden')
                    ->label('In Menu')
                    ->trueIcon('heroicon-o-x-circle')
                    ->falseIcon('heroicon-o-badge-check')
                    ->trueColor('secondary')
                    ->falseColor('success'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('weight'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('preview')
                    ->label('Preview in Browser')
                    ->color('success')
                    ->icon('heroicon-o-eye')
                    ->url(fn (Screen $record): string => route('app', ['screen' => $record->slug])),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\PagesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListScreens::route('/'),
            'create' => Pages\CreateScreen::route('/create'),
            'edit' => Pages\EditScreen::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes(['visible']);
    }
}
