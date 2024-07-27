<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicesResource\Pages;
use App\Filament\Resources\ServicesResource\RelationManagers;
use App\Models\Services;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Filament\Tables\View\TablesRenderHook;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Livewire\wrap;

class ServicesResource extends Resource
{
    protected static ?string $model = Services::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //add fillable fields
                Toggle::make('is_active')->default(false),
                TextInput::make('titleservice')->required()->placeholder('Enter Title'),
                TextInput::make('subtitleservice')->required()->placeholder('Enter Subtitle'),
                TextInput::make('titleservice1')->required()->placeholder('Enter Title 1'),
                TextInput::make('subtitleservice1')->required()->placeholder('Enter Subtitle 1'),
                TextInput::make('titleservice2')->required()->placeholder('Enter Title 2'),
                TextInput::make('subtitleservice2')->required()->placeholder('Enter Subtitle 2'),
                TextInput::make('titleservice3')->required()->placeholder('Enter Title 3'),
                TextInput::make('subtitleservice3')->required()->placeholder('Enter Subtitle 3'),
                TextInput::make('titleservice4')->required()->placeholder('Enter Title 4'),
                TextInput::make('subtitleservice4')->required()->placeholder('Enter Subtitle 4'),
                TextInput::make('titleservice5')->required()->placeholder('Enter Title 5'),
                TextInput::make('subtitleservice5')->required()->placeholder('Enter Subtitle 5'),
                TextInput::make('titleservice6')->required()->placeholder('Enter Title 6'),
                TextInput::make('subtitleservice6')->required()->placeholder('Enter Subtitle 6'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('titleservice')->wrap()->sortable(),
                Tables\Columns\TextColumn::make('subtitleservice')->wrap()->sortable(),
                ToggleColumn::make('is_active')
                ->beforeStateUpdated(
                    function (Services $services) {
                        Services::where('id', '!=', $services->id)->update(['is_active' => 0]);
                    }
                ),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                //add delete action
                DeleteAction::make(),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateServices::route('/create'),
            'edit' => Pages\EditServices::route('/{record}/edit'),
        ];
    }
}
