<div class="sticky top-0 h-screen max-w-sm p-4 m-4 bg-blue-300 rounded-lg friends">
    <h3 class="my-6 text-xl border-b-2">Following</h3>
    <ul>
        @foreach (auth()->user()->follows as $user)

            <li class="mb-3">
                <div class="flex items-center friend">
                    <div class="mr-4 avatar">
                        <img src="{{ $user->avatar }}" alt="" class="rounded-full">
                    </div>
                    <div class="name">
                        <span>{{ $user->name }}</span>
                    </div>
                </div>
            </li>

        @endforeach
    </ul>
</div>
