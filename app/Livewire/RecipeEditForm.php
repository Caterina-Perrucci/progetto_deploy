<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class RecipeEditForm extends Component
{
    use WithFileUploads;

    public $recipe;
    public $title;
    public $image;
    public $procedure;
    public $old_image;

    public function update(){
        $this->recipe->update([
            'title' => $this->title,
            'procedure' => $this->procedure,
            'image' => $this->image ? $this->image->store('public/recipes') : $this->recipe->image,
        ]);
        session()->flash('message', 'Ricetta aggiornata con successo');
        $this->reset('image');
    }

    public function mount(){
        $this->title = $this->recipe->title;
        $this->procedure = $this->recipe->procedure;
        $this->old_image = $this->recipe->image;
    }

    public function render()
    {
        return view('livewire.recipe-edit-form');
    }
}
