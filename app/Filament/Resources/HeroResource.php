<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Filament\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //add fields for image
                FileUpload::make('image'),
                TextInput::make('title')->required()->placeholder('Enter Title'),
                TextInput::make('walktitle')->required()->placeholder('Enter Walk Title'),
                TextInput::make('subtitle')->required()->placeholder('Enter Subtitle'),
                TextInput::make('link1')->required()->placeholder('Enter Link 1'),
                TextInput::make('link2')->required()->placeholder('Enter Link 2'),
                Toggle::make('is_active')->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->searchable()
            ->columns([
                //add columns for image
                Tables\Columns\ImageColumn::make('image')
                ->sortable(),
                Tables\Columns\TextColumn::make('title')->wrap()
                ->sortable()
                ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')->wrap()
                ->sortable()
                ->searchable(),
                ToggleColumn::make('is_active')
                ->beforeStateUpdated(
                    function (Hero $hero) {
                        Hero::where('id', '!=', $hero->id)->update(['is_active' => 0]);
                    }
                ),
            ])
            ->filters([

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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }
}
