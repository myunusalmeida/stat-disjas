<x-app-layout>
    <x-card>
        <div class="md:flex md:items-center md:justify-between text-gray-700">
            <div class="text-xl font-bold ">
                RUTH MADELINE
            </div>
            <div class="text-base mt-2 md:m-0">
                221810589
            </div>
        </div>
    </x-card>
    <x-separator />
    <x-card title="Impor Kalimantan Timur">
        @slot('aside')
            @livewire('bar-race')
        @endslot
        <div id="chart-container" class="w-full" style="height: 800px"></div>
    </x-card>
    <x-separator />
    <x-card title="Data">
        @slot('aside')
            <x-button.black onclick="Livewire.emit('openModal', 'modal-add')">
                <div class="mr-2">
                    <i class="gg-math-plus" style="--ggs: 0.6;"></i>
                </div>
                <span>data</span>
            </x-button.black>
        @endslot
        @livewire('table')
    </x-card>
</x-app-layout>
