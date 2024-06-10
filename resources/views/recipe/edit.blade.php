<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Modifica ricetta</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <livewire:recipe-edit-form :recipe="$recipe"/>
            </div>
        </div>
    </div>
</x-layout>