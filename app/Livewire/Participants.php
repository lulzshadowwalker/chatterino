<?php

namespace App\Livewire;

use App\Models\Chat;
use Livewire\Component;
use Livewire\Attributes\On;

class Participants extends Component
{
    public $chat;
    public $participants = [];

    #[On('chat:selected')]
    public function setChatProperty($id)
    {
        $this->chat = Chat::find($id);
        $this->participants = $this->chat?->participants ?? []; ;
    }

    public function render()
    {
        return view('livewire.participants');
    }
}
