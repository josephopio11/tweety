<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in to dashboard!
                </div>
            </div>
        </div>
    </div> --}}

    <div class="flex px-4 py-6 mx-auto main max-w-7xl sm:px-6 lg:px-8">
        <div class="flex-1 left">
            <div class="p-4 m-4 bg-white rounded-lg poster">
                {{-- <div class="flex items-center justify-center p-12"> --}}
                {{-- <div class="mx-auto w-full max-w-[550px]"> --}}
                <form action="{{ route('tweet.store') }}" method="POST">
                    @csrf

                    <div class="mb-5">
                        <textarea rows="4" name="body" id="body" placeholder="Type your message"
                            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                             autofocus></textarea>
                    </div>

                    <div class="flex flex-row items-center justify-between flex-auto">
                        <div class="flex items-center">
                            <img src='{{ auth()->user()->avatar }}' class='mr-4 rounded-full' />
                            @error('body')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <button
                            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                            Post
                        </button>
                    </div>
                </form>
                {{-- </div> --}}
                {{-- </div> --}}
            </div>
            <div class="p-4 m-4 bg-white rounded-lg posts">

                @foreach ($tweets as $tweet)
                    <div class='px-10 py-8 mx-auto mb-4 bg-white rounded-lg shadow-xl'>
                        <div class='mx-auto space-y-6'>
                            <div class="flex items-center">

                                <img src='https://i.pravatar.cc/50?u={{ $tweet->user_id }}' class='mr-4 rounded-full' />
                                <div>
                                    <p class='text-lg text-gray-800'>{{ $tweet->user->name }}</p>
                                    <p class="text-sm text-gray-500">A good guy for everyone</p>
                                </div>
                            </div>
                            <div class="flex w-full p-5 pb-10 transition duration-300 ease-in-out transform border-b md:p-0"
                                x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms>
                                {{ $tweet->body }}
                            </div>
                            <div class="flex flex-row mt-2 text-sm">
                                <div class="flex flex-col flex-auto">

                                    <div class="mt-1 text-gray-400 text-xxs" title="34k Downlaods in this year">
                                        {{ $tweet->created_at->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="flex flex-row justify-end flex-auto">
                                    <div
                                        class="ml-2 font-semibold text-green-700 delay-100 text-xxs group-hover:text-white">
                                        Like
                                    </div>
                                    <div
                                        class="ml-2 font-semibold delay-100 text-xxs text-amber-700 group-hover:text-white">
                                        Dislike
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <x-friends></x-friends>
    </div>
</x-app-layout>
