<?php

namespace App\Livewire;

use App\Models\Chanel;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class Chanels extends Component
{

    #[Url]
    public $search = '';

    #[Url]
    public $filter = 'all';

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

    #[Computed]
    public function chanels()
    {
        $query = Chanel::where('is_active', true);

        if ($this->filter === 'public') {
            $query->where('type', 'public');
        } elseif ($this->filter === 'private') {
            $query->where('type', 'private');
        }

        if ($this->search) {
            $query->where('title_ru', 'like', "%{$this->search}%"); // Пример с русским заголовком, измените по необходимости
        }

        return $query->orderBy('subscribers', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.chanels');
    }
}
