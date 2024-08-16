<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::where('is_active', true)->get();
    }

    public function render()
    {
        return view('livewire.categories');
    }
}
