<?php

namespace App\Livewire;

use App\Models\Chat;
use App\Models\Message;
use Livewire\Component;
use Livewire\Attributes\On;

class ChatBody extends Component
{
    public $messages;
    public $chat;

    public function mount()
    {
        $this->messages = collect();
    }

    public function send()
    {
        //
    }

    #[On('chat:selected')]
    public function setChatProperty($id)
    {
        $this->chat = Chat::find($id);
        $this->messages = $this->chat->messages;
    }

    #[On('chat:send')]
    public function addMessage($id)
    {
        $this->messages->push(Message::find($id));
    }

    public function render()
    {
        return view('livewire.chat-body');
    }
}
