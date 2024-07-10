<form wire:submit="send">
    <label class="input input-bordered flex items-center gap-2 min-h-14">
        <div class="tooltip" data-tip="Attach a file">
            <button @disabled($disabled)>
                <i class="fa-solid fa-paperclip"></i>
            </button>
        </div>
        <input type="text" class="grow" placeholder="Search" wire:model="content" @disabled($disabled) />
        <div class="tooltip" data-tip="Record a voice message">
            <button @disabled($disabled)>
                <i class="fa-solid fa-microphone"></i>
            </button>
        </div>
        <div class="tooltip" data-tip="Send message">
            <button @disabled($disabled)>
                <i class="fa-solid fa-paper-plane"></i>
            </button>
        </div>
    </label
</form>
