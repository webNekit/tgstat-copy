<?php

namespace App\Livewire;

use App\Models\Chanel;
use App\Models\Message;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class MessagesList extends Component
{
    #[Url()]
    public $orderBy = 'users';
    #[Url()]
    public $filter = 'all';
    #[Url()]
    public $category = null;

    #[On('orderByChanged')]
    public function updateOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
    }

    #[On('filterTypeChanged')]
    public function updateFilterType($filter)
    {
        $this->filter = $filter;
    }

    #[On('categoryChanged')]
    public function updateCategory($categoryId)
    {
        $this->category = $categoryId;
    }

    #[Computed()]
    public function messages()
    {
        $query = Message::where('is_active', true);

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
        return view('livewire.messages-list', [
            'messages' => $this->messages(),
        ]);
    }
}
