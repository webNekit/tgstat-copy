<?php

namespace App\Livewire;

use Livewire\Component;

class FilterMessage extends Component
{
    public $filter = 'all';

    public function setFilterType($filter)
    {
        $this->filter = $filter;
        $this->dispatch('filterTypeChanged', filter: $this->filter);
    }

    public function render()
    {
        return view('livewire.filter-message');
    }
}