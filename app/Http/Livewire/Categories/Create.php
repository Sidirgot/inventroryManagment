<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Create extends Component
{
    public $title = "";
    public $status = "0";
    
    public function save()
    {
        $attributes = $this->validate([
            'title' => 'required|string',
            'status' => 'required'
        ]);

        Category::create($attributes);

        session()->flash('success','Category created successfully');

        return redirect()->route('categories.index');
    }

    public function render()
    {
        return view('livewire.categories.create');
    }
}