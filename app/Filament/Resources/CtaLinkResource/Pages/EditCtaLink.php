<?php

namespace App\Filament\Resources\CtaLinkResource\Pages;

use App\Filament\Resources\CtaLinkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCtaLink extends EditRecord
{
    protected static string $resource = CtaLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
