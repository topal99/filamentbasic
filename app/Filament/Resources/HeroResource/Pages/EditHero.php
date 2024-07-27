<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\Resources\HeroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Tables\Enums\RecordCheckboxPosition;
use Illuminate\Database\Eloquent\Model;

class EditHero extends EditRecord
{
    protected static string $resource = HeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    //redirect to index page
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
        }
        protected function handleRecordUpdate(Model $record, array $data): Model
        {
            $record = parent::handleRecordUpdate($record, $data);
        //if record is active, set all other records to inactive
            if ($record->is_active) {
                HeroResource::getModel()::where('id', '!=', $record->id)->update(['is_active' => 0]);
            }
            return $record;
        }

}
