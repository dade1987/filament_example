<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Widgets\FirstChart;
use Filament\Notifications\Notification;

class PaginaLibera2 extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.pagina-libera2';

    public string $text="Testo Iniziale";

    public function changeText()
    {
        if($this->text=="Testo Iniziale") {
            $this->text="Testo Modificato";
        } else {
            $this->text="Testo Iniziale";
        }

        Notification::make()
        ->title('Testo Cambiato')
        ->success()
        ->send();
    }

    public function getHeaderWidgets(): array
    {
        return [
            FirstChart::class
        ];
    }
}
