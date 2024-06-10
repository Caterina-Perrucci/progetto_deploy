<form class="shadow p-5" wire:submit="update">
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" wire:model.live="title">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Immagine attuale</label>
        <img src="{{Storage::url($recipe->image)}}" class="img-fluid" alt="">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input type="file" class="form-control" id="image" wire:model="image">
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    @if ($image)
        <div class="mb-3">
            <label class="form-label">Preview immagine</label>
            <img src="{{$image->temporaryUrl()}}" class="img-fluid" alt="">
        </div>
    @endif
    <div class="mb-3">
        <label for="procedure" class="form-label">Procedimento</label>
        <textarea wire:model.blur="procedure" class="form-control" id="procedure" cols="30" rows="6"></textarea>
        @error('procedure')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-custom">Modifica</button>
</form>