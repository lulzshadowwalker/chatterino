<?php

namespace App\Livewire;

use App\Models\Chat;
use App\Models\Message;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatInput extends Component
{
    public ?string $content;
    public bool $disabled = true;
    public ?Chat $chat = null;

    #[On('chat:selected')]
    function handleChatSelected($id)
    {
        $this->chat = Chat::find($id);
        $this->disabled = !isset($this->chat);
    }

    public function send()
    {
        if (empty($this->content) || !$this->chat) return;

        $message = Message::create([
            'type' => Message::TYPE_TEXT,
            'content' => $this->content,
            'user_id' => auth()->id(),
            'chat_id' => $this->chat->id,
        ]);
        $this->dispatch('chat:send', id: $message->id);
        $this->content = '';
    }

    public function render()
    {
        return view('livewire.chat-input');
    }
}

