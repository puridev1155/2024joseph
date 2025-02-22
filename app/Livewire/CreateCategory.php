<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CreateCategory extends Component
{
    public $category_name;

    protected $rules = [
        'category_name' => 'required|string|max:255',
    ];

    public function createCategory()
    {
        $this->validate();

        $category = Category::create(['category_name' => $this->category_name]);

        // Emit an event to notify the parent component to refresh the select options
        $this->emit('categoryCreated', $category->id, $category->category_name);
        
        // Reset the form
        $this->reset('category_name');
    }

    public function render()
    {
        return view('livewire.create-category');
    }
}