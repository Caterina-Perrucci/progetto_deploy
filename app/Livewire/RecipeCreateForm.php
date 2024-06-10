<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Recipe;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class RecipeCreateForm extends Component
{
    use WithFileUploads;
    
    #[Validate('required|min:5|max:50')]
    public $title;
    #[Validate('required|image|mimes:jpg,jpeg,webp,png')]
    public $image;
    #[Validate('required|min:10|max:2000')]
    public $procedure;

    protected $rules = [
        'title' => 'required|min:5|max:20',
        'procedure' => 'required|min:10|max:2000',
        'image' => 'required|image|mimes:jpg,jpeg,webp,png'
    ];

    protected $messages = [
        'required' => 'Il campo non può essere vuoto',
        'min' => 'Devi inserire almeno :min caratteri',
        'max' => 'Devi inserire massimo :max caratteri',
        'image' => 'Il file deve essere un\'immagine',
        'mimes' => 'L\'immagine deve avere queste estensioni :values',
    ];

    public function store(){
        $this->validate();
        // Recipe::create([
        $recipe = Auth::user()->recipes()->create([
            'title' => $this->title,
            'procedure' => $this->procedure,
            'image' => $this->image->store('public/recipes'),
        ]);
        session()->flash('message', 'Ricetta inserita con successo');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.recipe-create-form');
    }
}
