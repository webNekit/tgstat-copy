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
    public $category = null; // Добавляем категорию для фильтрации

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
    }

    #[On('filterType')]
    public function updateFilterType($filter)
    {
        $this->filter = $filter;
    }

    #[On('orderByChanged')]
    public function updateOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }

    #[On('categoryChanged')]
    public function updateCategory($categoryId)
    {
        $this->category = $categoryId;
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

        if ($this->category) {
            $query->where('category_id', $this->category);
        }

        return $query->orderBy($this->orderBy, 'desc')->get();
    }

    public function render()
    {
        return view('livewire.chanels');
    }
}
