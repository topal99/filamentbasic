<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\Resources\HeroResource;
use App\Models\Hero;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateHero extends CreateRecord
{
    protected static string $resource = HeroResource::class;

    //redirect to index page
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
        }

    protected function handleRecordCreation(array $data): Model
    {
        $hero = parent::handleRecordCreation($data);

        //if hero is active, set all other heroes to inactive
        if ($hero->is_active) {
            Hero::where('id', '!=', $hero->id)->update(['is_active' => 0]);
        }
        return $hero;
    }
}

