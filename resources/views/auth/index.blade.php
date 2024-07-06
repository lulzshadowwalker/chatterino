<x-guest-layout>
    <div class="flex m-2 gap-2 h-[calc(100vh-1rem)] overflow-hidden">
        <div class="flex-grow flex border-2 rounded-3xl bg-base-200">
            {{-- // previous conversations sidebar --}}
            <section class="max-w-[20rem] w-full my-2 mx-3 flex flex-col gap-3">
                <search>
                <label class="input input-bordered rounded-box flex items-center gap-2">
                    <svg id='Search_1_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/> <g transform="matrix(0.83 0 0 0.83 12 12)" > <g style="" > <g transform="matrix(1 0 0 1 -1.5 -1.5)" > <path style="stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-10.5, -10.5)" d="M 0.5 10.5 C 0.5 16.022847498307932 4.977152501692066 20.5 10.5 20.5 C 16.022847498307932 20.5 20.5 16.022847498307932 20.5 10.5 C 20.5 4.977152501692066 16.022847498307932 0.5 10.5 0.5 C 4.977152501692066 0.5 0.5 4.977152501692065 0.5 10.499999999999998 Z" stroke-linecap="round" /> </g> <g transform="matrix(1 0 0 1 8.54 8.54)" > <path style="stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-20.54, -20.54)" d="M 23.5 23.5 L 17.571 17.571" stroke-linecap="round" /> </g> </g> </g> </svg>
                    <input type="text" class="grow" placeholder="search" />
                </label>
                </search>

                {{-- <x-chat-tile> --}}
                    <section class="space-y-2 flex-grow overflow-y-auto">
                        @foreach (range(1, 10) as $item)
                            <div class="flex items-start gap-4 p-2 pb-3 rounded-box transition-all duration-300 hover:bg-base-300 cursor-pointer">
                                <div class="avatar">
                                    <div class="w-14 rounded-xl">
                                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <div class="flex justify-between items-center">
                                        <h3 class="font-bold">John Doe</h3>
                                        <span class="text-xs">10:00 AM</span>
                                    </div>
                                    <p class="text-sm line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.</p>
                                </div>
                            </div>
                        @endforeach
                    </section>
            </section>

            {{-- // chat --}}
            <section class="flex-grow ps-8 pe-6 my-2 flex flex-col">
                {{-- <x-chat-header> --}}
                    <header class="flex justify-between items-end">
                        <div>
                            <h1 class="text-4xl font-semibold">Design Chat</h1>
                            <p class="text-neutral-400">23 members, 10 online</p>
                        </div>

                        <div class="flex gap-4">
                            <div class="tooltip" data-tip="Search">
                                <svg id='Search_1_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/> <g transform="matrix(0.83 0 0 0.83 12 12)" > <g style="" > <g transform="matrix(1 0 0 1 -1.5 -1.5)" > <path style="stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-10.5, -10.5)" d="M 0.5 10.5 C 0.5 16.022847498307932 4.977152501692066 20.5 10.5 20.5 C 16.022847498307932 20.5 20.5 16.022847498307932 20.5 10.5 C 20.5 4.977152501692066 16.022847498307932 0.5 10.5 0.5 C 4.977152501692066 0.5 0.5 4.977152501692065 0.5 10.499999999999998 Z" stroke-linecap="round" /> </g> <g transform="matrix(1 0 0 1 8.54 8.54)" > <path style="stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-20.54, -20.54)" d="M 23.5 23.5 L 17.571 17.571" stroke-linecap="round" /> </g> </g> </g> </svg>
                            </div>
                            <div class="tooltip" data-tip="Call">
                                <svg id='Phone_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/> <g transform="matrix(0.45 0 0 0.45 12 12)" > <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" translate(-25.01, -24.99)" d="M 11.839844 2.988281 C 11.070313 2.925781 10.214844 3.148438 9.425781 3.703125 C 8.730469 4.1875 7.230469 5.378906 5.828125 6.726563 C 5.128906 7.398438 4.460938 8.097656 3.945313 8.785156 C 3.425781 9.472656 2.972656 10.101563 3 11.015625 C 3.027344 11.835938 3.109375 14.261719 4.855469 17.980469 C 6.601563 21.695313 9.988281 26.792969 16.59375 33.402344 C 23.203125 40.011719 28.300781 43.398438 32.015625 45.144531 C 35.730469 46.890625 38.160156 46.972656 38.980469 47 C 39.890625 47.027344 40.519531 46.574219 41.207031 46.054688 C 41.894531 45.535156 42.59375 44.871094 43.265625 44.171875 C 44.609375 42.769531 45.800781 41.269531 46.285156 40.574219 C 47.390625 39 47.207031 37.140625 45.976563 36.277344 C 45.203125 35.734375 38.089844 31 37.019531 30.34375 C 35.933594 29.679688 34.683594 29.980469 33.566406 30.570313 C 32.6875 31.035156 30.308594 32.398438 29.628906 32.789063 C 29.117188 32.464844 27.175781 31.171875 23 26.996094 C 18.820313 22.820313 17.53125 20.878906 17.207031 20.367188 C 17.597656 19.6875 18.957031 17.320313 19.425781 16.425781 C 20.011719 15.3125 20.339844 14.050781 19.640625 12.957031 C 19.347656 12.492188 18.015625 10.464844 16.671875 8.429688 C 15.324219 6.394531 14.046875 4.464844 13.714844 4.003906 L 13.714844 4 C 13.28125 3.402344 12.605469 3.050781 11.839844 2.988281 Z M 11.65625 5.03125 C 11.929688 5.066406 12.09375 5.175781 12.09375 5.175781 C 12.253906 5.398438 13.65625 7.5 15 9.53125 C 16.34375 11.566406 17.714844 13.652344 17.953125 14.03125 C 17.992188 14.089844 18.046875 14.753906 17.65625 15.492188 L 17.65625 15.496094 C 17.214844 16.335938 15.15625 19.933594 15.15625 19.933594 L 14.871094 20.4375 L 15.164063 20.9375 C 15.164063 20.9375 16.699219 23.527344 21.582031 28.410156 C 26.46875 33.292969 29.058594 34.832031 29.058594 34.832031 L 29.558594 35.125 L 30.0625 34.839844 C 30.0625 34.839844 33.652344 32.785156 34.5 32.339844 C 35.238281 31.953125 35.902344 32.003906 35.980469 32.050781 C 36.671875 32.476563 44.355469 37.582031 44.828125 37.914063 C 44.84375 37.925781 45.261719 38.558594 44.652344 39.425781 L 44.648438 39.425781 C 44.28125 39.953125 43.078125 41.480469 41.824219 42.785156 C 41.195313 43.4375 40.550781 44.046875 40.003906 44.457031 C 39.457031 44.867188 38.96875 44.996094 39.046875 45 C 38.195313 44.972656 36.316406 44.953125 32.867188 43.332031 C 29.417969 41.714844 24.496094 38.476563 18.007813 31.984375 C 11.523438 25.5 8.285156 20.578125 6.664063 17.125 C 5.046875 13.675781 5.027344 11.796875 5 10.949219 C 5.003906 11.027344 5.132813 10.535156 5.542969 9.988281 C 5.953125 9.441406 6.558594 8.792969 7.210938 8.164063 C 8.519531 6.910156 10.042969 5.707031 10.570313 5.339844 L 10.570313 5.34375 C 11.003906 5.039063 11.382813 5 11.65625 5.03125 Z" stroke-linecap="round" /> </g> </svg>
                            </div>
                            <div class="tooltip" data-tip="Menu">
                                <svg id='dots-vertical_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/> <g transform="matrix(1 0 0 1 12 12)" > <g style="" > <g transform="matrix(1 0 0 1 0 0)" > <path style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-12, -12)" d="M 0 0 L 24 0 L 24 24 L 0 24 z" stroke-linecap="round" /> </g> <g transform="matrix(1 0 0 1 0 0)" > <circle style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="1" /> </g> <g transform="matrix(1 0 0 1 0 7)" > <circle style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="1" /> </g> <g transform="matrix(1 0 0 1 0 -7)" > <circle style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" cx="0" cy="0" r="1" /> </g> </g> </g> </svg>
                            </div>
                        </div>
                    </header>

                    {{-- <x-chat-message> s --}}
                        <section class="my-4 flex-grow overflow-y-scroll">
                            @foreach (range(1, 10) as $message)
                                <div class="chat chat-start">
                                    <div class="chat-image avatar">
                                        <div class="w-10 rounded-full">
                                            <img
                                                alt="Tailwind CSS chat bubble component"
                                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        Obi-Wan Kenobi
                                        <time class="text-xs opacity-50">12:45</time>
                                    </div>
                                    <div class="chat-bubble">You were the Chosen One!</div>
                                    <div class="chat-footer opacity-50">Delivered</div>
                                </div>
                                <div class="chat chat-end">
                                    <div class="chat-image avatar">
                                        <div class="w-10 rounded-full">
                                            <img
                                                alt="Tailwind CSS chat bubble component"
                                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        Anakin
                                        <time class="text-xs opacity-50">12:46</time>
                                    </div>
                                    <div class="chat-bubble">I hate you!</div>
                                    <div class="chat-footer opacity-50">Seen at 12:46</div>
                                </div>
                            @endforeach
                        </section>

                        <label class="input input-bordered flex items-center gap-2 min-h-14">
                            <div class="tooltip" data-tip="Attach a file">
                                <i class="fa-solid fa-paperclip"></i>
                            </div>
                            <input type="text" class="grow" placeholder="Search" />
                            <div class="tooltip" data-tip="Record a voice message">
                                <i class="fa-solid fa-microphone"></i>
                            </div>
                            <div class="tooltip" data-tip="Send message">
                                <i class="fa-solid fa-paper-plane"></i>
                            </div>
                        </label
            </section>
        </div>

        {{-- // chat details --}}
        <section class="max-w-[18rem] w-full flex flex-col gap-2">
            <div class="rounded-3xl border-2 bg-base-200 pt-2 ps-5">
                <h2 class="text-2xl font-semibold">Group Info</h2>
                <h3 class="text-xl font-semibold mt-3">Files</h3>

                <ul>
                    @foreach (range(1, 5) as $item)
                        <li tabindex="0" class="collapse collapse-arrow border-base-300 bg-base-200">
                            <div class="collapse-title text-lg !px-0">
                                <i class="fa-solid fa-images me-1"></i>
                                Pictures
                            </div>
                            <div class="collapse-content">
                                <p>tabindex="0" attribute is necessary to make the div focusable</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Particpants --}}
            <div class="rounded-3xl border-2 bg-base-200 py-4 flex-grow overflow-y-auto">
                <h2 class="text-2xl font-semibold mb-3 px-4">Particpants</h2>
                <ul class=" space-y-4">
                    @foreach (range(1, 20) as $user)
                        <li class="flex items-center gap-4 mx-2 p-2 rounded-box transition-all duration-300 hover:bg-base-300 cursor-pointer">
                            <div class="avatar">
                                <div class="w-10 rounded-xl">
                                    <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                </div>
                            </div>

                            <h3 class="font-semibold">John Doe</h3>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
</x-guest-layout>
