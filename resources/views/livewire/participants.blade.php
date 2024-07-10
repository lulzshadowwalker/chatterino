<div class="rounded-3xl border-2 bg-base-200 py-4 flex-grow overflow-y-auto">
    <h2 class="text-2xl font-semibold mb-3 px-4">Particpants</h2>
    <ul class=" space-y-4">
        @foreach ($participants as $participant)
            <li class="flex items-center gap-4 mx-2 p-2 rounded-box transition-all duration-300 hover:bg-base-300 cursor-pointer">
                <div class="avatar">
                    <div class="w-10 rounded-xl">
                        <img src={{ $participant->avatar }}/>
                    </div>
                </div>

                <h3 class="font-semibold">{{ $participant->name }}</h3>
            </li>
        @endforeach
    </ul>
</div>
