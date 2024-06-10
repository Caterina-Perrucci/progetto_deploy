<x-layout>
    <x-slot name="titolo">Welcome</x-slot>
    <x-header/>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Le ultime ricette</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @foreach ($recipes as $recipe)
                <div class="col-12 col-md-3">
                    <x-card :recipe="$recipe"/>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>