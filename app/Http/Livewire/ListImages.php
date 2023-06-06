<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Concerns\InteractsWithTable;

class ListImages extends Component implements HasTable
{
    use InteractsWithTable;

    protected function getTableQuery()
    {
        return Image::query()->orderBy('order');
    }

    protected function getTableColumns()
    {
        return
        [
            TextColumn::make('title')->sortable(),
            TextColumn::make('description'),
            ImageColumn::make('url')->circular()
        ];
    }

    public function render()
    {
        return view('livewire.list-images');
    }
}
