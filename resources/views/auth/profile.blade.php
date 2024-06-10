<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Benvenuto {{Auth::user()->name}}</h2>
                <p>Di seguito, la lista delle tue ricette</p>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <livewire:recipe-list />
            </div>
        </div>
    </div>
</x-layout>