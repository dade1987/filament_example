<x-filament::page>

    <p class="text-left ...">{{ $text }}</p>


    <a wire:click="changeText"
        class="filament-button filament-button-size-md inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset min-h-[2.25rem] px-4 text-sm text-white shadow focus:ring-white border-transparent bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 filament-page-button-action"
        dusk="filament.pagina-libera-2.changeText">

        <span class="">
            Cambia Testo
        </span>

    </a>

    @livewire('first-form')

    @livewire('list-images')

</x-filament::page>
