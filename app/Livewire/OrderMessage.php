<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class OrderMessage extends Component
{
    public $orderBy = 'users';

    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        $this->dispatch('orderByChanged', orderBy: $this->orderBy);
    }

    public function render()
    {
        return view('livewire.order-message');
    }
}
