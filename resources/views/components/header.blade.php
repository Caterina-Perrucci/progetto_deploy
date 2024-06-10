<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center text-custom display-1 fw-bold"><i class="fa-solid fa-wheat-awn"></i> Giallo Aulab</h1>
            <p class="text-center fs-3">Il miglior blog di cucina</p>
        </div>
        @auth
            <div class="col-12 d-flex justify-content-center">
                <a href="{{route('recipe.create')}}" class="btn btn-custom">Pubblica la tua ricetta</a>
            </div>
        @endauth
    </div>
</div>