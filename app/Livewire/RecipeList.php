<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class RecipeList extends Component
{
    public function destroy(Recipe $recipe){
        $recipe->delete();
        session()->flash('message', 'Ricetta cancellata con successo');
    }

    public function render()
    {
        $recipes = Recipe::all();
        return view('livewire.recipe-list', compact('recipes'));
    }
}
