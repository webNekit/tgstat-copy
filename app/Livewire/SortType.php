<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class SortType extends Component
{

    #[Url()]
    public $filter = 'all'; // Значение по умолчанию

    public function setFilterType($filter)
    {
        $this->filter = $filter; // Обновление значения фильтра
        $this->dispatch('filterType', filter: $this->filter); // Отправка события
    }

    public function render()
    {
        return view('livewire.sort-type', ['filter' => $this->filter]);
    }
}
