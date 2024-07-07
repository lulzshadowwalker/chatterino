<x-guest-layout>
    <div class="flex m-2 gap-2 h-[calc(100vh-1rem)] overflow-hidden">
        <div class="flex-grow flex border-2 rounded-3xl bg-base-200">
            {{-- // previous conversations sidebar --}}
            <section class="max-w-[20rem] w-full my-2 mx-3 flex flex-col gap-3 border-e pe-3">
                <label class="input input-bordered rounded-box flex items-center gap-2">
                    <svg id='Search_1_24' width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><rect width='24' height='24' stroke='none' fill='#000000' opacity='0'/> <g transform="matrix(0.83 0 0 0.83 12 12)" > <g style="" > <g transform="matrix(1 0 0 1 -1.5 -1.5)" > <path style="stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-10.5, -10.5)" d="M 0.5 10.5 C 0.5 16.022847498307932 4.977152501692066 20.5 10.5 20.5 C 16.022847498307932 20.5 20.5 16.022847498307932 20.5 10.5 C 20.5 4.977152501692066 16.022847498307932 0.5 10.5 0.5 C 4.977152501692066 0.5 0.5 4.977152501692065 0.5 10.499999999999998 Z" stroke-linecap="round" /> </g> <g transform="matrix(1 0 0 1 8.54 8.54)" > <path style="stroke: rgb(0,0,0); stroke-width: 1; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;" transform=" translate(-20.54, -20.54)" d="M 23.5 23.5 L 17.571 17.571" stroke-linecap="round" /> </g> </g> </g> </svg>
                    <input type="text" class="grow" placeholder="search" disabled />
                </label>

                {{-- <x-chat-tile> --}}
                    <section class="space-y-2 flex-grow overflow-y-auto">
                        @foreach (range(1, 2) as $item)
                            <div class="flex items-start gap-4 p-2 pb-3 rounded-box transition-all duration-300 hover:bg-base-300 cursor-pointer">
                                <div class="avatar">
                                    <div class="w-14 rounded-xl">
                                        <img src="https://images.unsplash.com/photo-1542596594-649edbc13630?q=80&w=256&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <div class="flex justify-between items-center">
                                        <h3 class="font-bold">Christina Rose</h3>
                                        <span class="text-xs">03:00 AM</span>
                                    </div>
                                    <p class="text-sm line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates.</p>
                                </div>
                            </div>
                        @endforeach
                    </section>
            </section>

            {{-- // chat --}}
            <section class="flex-grow ps-8 pe-6 my-2 flex flex-col">
                    <header>
                        <h1 class="text-4xl font-semibold">Welcome to Chatterino 👋</h1>
                        <p class="text-neutral-400">Sign in or register to continue</p>
                    </header>

                    {{-- <x-chat-message> s --}}
                        <section class="flex-grow overflow-y-scroll flex flex-col items-stretch justify-center gap-3 max-w-fit mx-auto">
                            <a href="{{ route('auth.providers.redirect', ['provider' => 'discord']) }}" class="btn btn-outline"><i class="fa-brands fa-discord"></i> Continue with Discord</a>
                            <a href="{{ route('auth.providers.redirect', ['provider' => 'github']) }}" class="btn btn-outline"><i class="fa-brands fa-github"></i> Continue with Github</a>
                        </section>
            </section>
        </div>

        {{-- // chat details --}}
        <section class="max-w-[18rem] w-full flex flex-col gap-2 pointer-events-none">
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
            <div class="rounded-3xl border-2 bg-base-200 py-4 flex-grow overflow-y-auto pointer-events-none">
                <h2 class="text-2xl font-semibold mb-3 px-4">Particpants</h2>
                <ul class=" space-y-4">
                    @foreach (range(1, 3) as $user)
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
