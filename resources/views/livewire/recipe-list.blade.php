<div>
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Pubblicata il</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        @foreach (Auth::user()->recipes as $recipe)
            <tbody>
                <tr>
                    <th scope="row">{{$recipe->id}}</th>
                    <td>{{$recipe->title}}</td>
                    <td>{{ $recipe->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{route('recipe.show', $recipe)}}" class="btn btn-primary"><i class="fa-regular fa-eye"></i></a>
                        <a href="{{route('recipe.edit', $recipe)}}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a wire:click="destroy({{$recipe}})" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>