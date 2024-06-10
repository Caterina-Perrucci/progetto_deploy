<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>{{$recipe->title}}</h2>
            </div>
        </div>
    </div>
    <div class="container my-5 shadow">
        <div class="row">
            <div class="col-12 col-md-6 p-3">
                <img src="{{Storage::url($recipe->image)}}" alt="{{$recipe->title}}" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 p-3">
                <h4>Procedimento</h4>
                <p>{{$recipe->procedure}}</p>
                <p>Inserita il: {{$recipe->created_at->format('d/m/Y')}} da {{$recipe->user->name}}</p>
            </div>
        </div>
    </div>
</x-layout>