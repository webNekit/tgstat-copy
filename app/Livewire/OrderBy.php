<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class OrderBy extends Component
{
    #[Url()]
    public $orderBy = 'subscribers'; // Значение по умолчанию

    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy; // Обновление значения сортировки
        $this->dispatch('orderByChanged', orderBy: $this->orderBy); // Отправка события
    }

    public function render()
    {
        return view('livewire.order-by', ['orderBy' => $this->orderBy]);
    }
}
