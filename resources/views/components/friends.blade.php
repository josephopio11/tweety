<div class="sticky top-0 h-screen p-4 m-4 bg-blue-300 rounded-lg friends">
    <h3 class="mb-4 text-xl border-b-2">Following</h3>
    <ul>
        @foreach (range(1,8) as $item)
            <li class="mb-3">
                <div class="flex items-center friend">
                    <div class="mr-4 avatar">
                        <img src="https://i.pravatar.cc/50?u={{ $item }}" alt="" class="rounded-full">
                    </div>
                    <div class="name">
                        <span>Friend {{ $item }}</span>
                    </div>
                </div>
            </li>

        @endforeach
    </ul>
</div>
