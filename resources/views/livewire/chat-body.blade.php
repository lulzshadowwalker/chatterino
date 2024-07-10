<section class="my-4 flex-grow overflow-y-scroll" wire:poll.1s>
    @foreach ($messages as $message)
        <div class="chat {{ $message->sentByMe ? 'chat-end' : 'chat-start' }}">
            <div class="chat-image avatar">
                <div class="w-10 rounded-full">
                    <img
                        alt="Tailwind CSS chat bubble component"
                        src={{ $message->sender->avatar }}/>
                </div>
            </div>
            <div class="chat-header">
                {{ $message->sender->name }}
                <time class="text-xs opacity-50">{{ $message->sentAt->diffForHumans() }}</time>
            </div>
            @if ($message->type === \App\Models\Message::TYPE_TEXT)
                <div class="chat-bubble">{{ $message->content }}</div>
                <div class="chat-footer opacity-50">Delivered</div>
            @endif
        </div>
    @endforeach
    <div id="js-chat-end"></div>
</section>

@script
<script>
    const scrollToBottom = () => {
        $('#js-chat-end').get(0).scrollIntoView({
            behavior: 'smooth',
            block: 'end',
            inline: 'end'
        });
    }

    Livewire.hook('morph.added',  ({ el }) => {
        scrollToBottom();
    });
    Livewire.on('chat:send', () => {
        scrollToBottom();
    });
</script>
@endscript
