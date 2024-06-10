<div class="card" style="width: 18rem; height: 28rem;">
    <img src="{{Storage::url($recipe->image)}}" class="card-img-top h-50" alt="{{$recipe->title}}">
    <div class="card-body">
        <h5 class="card-title">{{$recipe->title}}</h5>
        <p>{{Str::limit($recipe->procedure, 35)}}</p>
        <a href="{{route('recipe.show', $recipe)}}" class="btn btn-custom mt-5">Dettaglio</a>
    </div>
    <div class="card-footer">
        <small class="text-body-secondary">Inserita: {{$recipe->created_at->diffForHumans()}}</small>
    </div>
</div>