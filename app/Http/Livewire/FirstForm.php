<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class FirstForm extends Component implements HasForms
{
    use InteractsWithForms;

    public $title;
    public $description;

    public function mount(): void
    {
        $this->form->fill([
            'title' => session()->get('title', 'Titolo di Default'),
            'description' => session()->get('description', 'Descrizione di Default'),
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('title')->required(),
            MarkdownEditor::make('description'),
        ];
    }

    public function submitPippo(): void
    {
        session()->put('title', $this->title);
        session()->put('description', $this->description);

        Notification::make()
        ->title('Dati Inviati')
        ->success()
        ->send();
    }

    public function render()
    {
        return view('livewire.first-form');
    }
}
