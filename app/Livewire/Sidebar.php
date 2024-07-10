<?php

namespace App\Livewire;

use App\Models\Chat;
use Livewire\Component;

class Sidebar extends Component
{
    public $search;
    public $chats;

    public function selectChat(int $id)
    {
        $this->dispatch('chat:selected', id: $id);
    }

    public function render()
    {
        $this->chats = Chat::mine()->search($this->search)->get();
        return view('livewire.sidebar');
    }
}
