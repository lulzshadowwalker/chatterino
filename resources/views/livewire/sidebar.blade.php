<section class="max-w-[20rem] w-full my-2 mx-3 flex flex-col gap-3">
    <search>
    <label class="input input-bordered rounded-box flex items-center gap-2">
        <svg id='Search_1_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'> <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' /> <g transform="matrix(0.83 0 0 0.83 12 12)"> <g style=""> <g transform="matrix(1 0 0 1 -1.5 -1.5)"> <path style="stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-10.5, -10.5)" d="M 0.5 10.5 C 0.5 16.022847498307932 4.977152501692066 20.5 10.5 20.5 C 16.022847498307932 20.5 20.5 16.022847498307932 20.5 10.5 C 20.5 4.977152501692066 16.022847498307932 0.5 10.5 0.5 C 4.977152501692066 0.5 0.5 4.977152501692065 0.5 10.499999999999998 Z" stroke-linecap="round" /> </g> <g transform="matrix(1 0 0 1 8.54 8.54)"> <path style="stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-20.54, -20.54)" d="M 23.5 23.5 L 17.571 17.571" stroke-linecap="round" /> </g> </g> </g> </svg>
        <input type="text" class="grow" placeholder="search" wire:model.live="search" />
    </label>
    </search>

    <section class="space-y-2 flex-grow overflow-y-auto">
        @foreach ($chats as $chat)
            <div
                wire:click="selectChat({{ $chat->id }})"
                class="flex items-start gap-4 p-2 pb-3 rounded-box transition-all duration-300 hover:bg-base-300 cursor-pointer">
                <div class="avatar">
                    <div class="w-14 rounded-xl">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold">{{ $chat->name }}</h3>
                        <span class="text-xs">{{ $chat->latestMessage->sentAt->diffForHumans() }}</span>
                    </div>
                    <p class="text-sm line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                        voluptates.</p>
                </div>
            </div>
        @endforeach
    </section>
</section>
