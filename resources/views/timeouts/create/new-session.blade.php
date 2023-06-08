<x-app-layout>
@livewireStyles


    <section class="flex align-center justify-between ">
        <h1 class="page-title page-title-small">Nieuwe time-out</h1>
        <a class="btn btn-warning" wire:click="step1" href="/timeout/create">Stop</a>
    </section>


            

    @livewire('multi-step-form')
        


    @livewireScripts
</x-app-layout>