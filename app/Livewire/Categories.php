<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $categories;
    public $selectedCategory = null; // Добавляем свойство для выбранной категории

    protected $listeners = ['categoryChanged' => 'updateSelectedCategory']; // Слушаем событие для обновления категории

    public function mount()
    {
        $this->categories = Category::where('is_active', true)->get();
    }

    public function setCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->dispatch('categoryChanged', categoryId: $categoryId); // Отправляем событие с ID категории
    }

    public function updateSelectedCategory($categoryId)
    {
        $this->selectedCategory = $categoryId; // Обновляем выбранную категорию
    }

    public function render()
    {
        return view('livewire.categories');
    }
}
