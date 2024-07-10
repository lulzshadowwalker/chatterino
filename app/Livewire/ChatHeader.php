<?php

namespace App\Livewire;

use App\Models\Chat;
use Livewire\Component;
use Livewire\Attributes\On;

class ChatHeader extends Component
{
    public $chat;

    #[On('chat:selected')]
    public function setChatProperty($id)
    {
        $this->chat = Chat::find($id);
    }

    public function getParticipantsCountProperty()
    {
        return $this->chat?->participants->count();
    }

    public function render()
    {
        return view('livewire.chat-header');
    }
}
