<x-app-layout>
    <div class="flex m-2 gap-2 h-[calc(100vh-1rem)] overflow-hidden">
        <div class="flex-grow flex border-2 rounded-3xl bg-base-200">
            <livewire:sidebar />

            <section class="flex-grow ps-8 pe-6 my-2 flex flex-col">
                <livewire:chat-header />
                <livewire:chat-body />
                <livewire:chat-input />
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

            <livewire:participants />
        </section>
    </div>
</x-app-layout>
