<?php

namespace App\Livewire;

use App\Models\Chanel;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class Chanels extends Component
{
    #[Url()]
    public $search = '';
    #[Url()]
    public $filter = 'all';
    #[Url()]
    public $orderBy = 'subscribers';
    #[Url()]
    public $category = null;

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->update(); // Обновляем данные после изменения поиска
    }

    #[On('filterType')]
    public function updateFilterType($filter)
    {
        $this->filter = $filter;
        $this->update(); // Обновляем данные после изменения фильтра
    }

    #[On('orderByChanged')]
    public function updateOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        $this->update(); // Обновляем данные после изменения сортировки
    }

    #[On('categoryChanged')]
    public function updateCategory($categoryId)
    {
        $this->category = $categoryId;
        $this->update(); // Обновляем данные после изменения категории
    }

    #[Computed()]
    public function chanels()
    {
        $query = Chanel::where('is_active', true);

        if ($this->filter === 'public') {
            $query->where('type', 'public');
        } elseif ($this->filter === 'private') {
            $query->where('type', 'private');
        }

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('title_ru', 'like', "%{$this->search}%")
                    ->orWhere('title_en', 'like', "%{$this->search}%")
                    ->orWhere('title_tt', 'like', "%{$this->search}%")
                    ->orWhere('title_uz', 'like', "%{$this->search}%");
            });
        }

        if ($this->category) {
            $query->where('category_id', $this->category);
        }

        return $query->orderBy($this->orderBy, 'desc')->get();
    }

    public function update()
    {
        // Просто вызываем рендер для обновления данных
        $this->render();
    }

    public function render()
    {
        return view('livewire.chanels', [
            'chanels' => $this->chanels(),
        ]);
    }
}