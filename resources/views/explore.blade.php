<x-app>
    <div class="w-full border rounded-xl border-gray-400 mb-6 p-4">
        <form action="explore" method="GET">
            {{--<label for="search" class="block mb-2 uppercase font-bold text-xs text-gray-700">--}}
            {{--Search--}}
            {{--</label>--}}
            <div class="flex justify-between">
                <input id="search" type="text"
                       class="border border-gray-400 p-1 w-full pl-2"
                       name="search"
                       value="{{ request()->search }}"
                       placeholder="Search Key...">

                <button type="submit"
                        class="bg-blue-400 text-white rounded mr-2 py-2 px-4 hover:bg-blue-500"
                >
                    <div class="flex items-center">
                        <svg viewBox="0 0 20 20" class="text-blue-400 mr-2 w-4">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g class="fill-current text-white">
                                    <path d="M12.9056439,14.3198574 C11.5509601,15.3729184 9.84871145,16 8,16 C3.581722,16 0,12.418278 0,8 C0,3.581722 3.581722,0 8,0 C12.418278,0 16,3.581722 16,8 C16,9.84871145 15.3729184,11.5509601 14.3198574,12.9056439 L19.6568542,18.2426407 L18.2426407,19.6568542 L12.9056439,14.3198574 Z M8,14 C11.3137085,14 14,11.3137085 14,8 C14,4.6862915 11.3137085,2 8,2 C4.6862915,2 2,4.6862915 2,8 C2,11.3137085 4.6862915,14 8,14 Z"
                                          id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                        <span>Search</span>
                    </div>
                </button>
            </div>

        </form>
    </div>

    <div class="border border-gray-400 p-4 rounded-xl">
        @forelse($users as $user)
            <div class="flex border border-gray-400 rounded-lg mb-3 justify-between p-1">
                <a href="{{ $user->path() }}" class="flex items-center">
                    <img src="{{ $user->avatar }}" alt="{{ $user->name }}" width="60"
                         class="mr-4 rounded">
                    <div>
                        <h4 class="font-bold">{{ $user->name }}</h4>
                        <h6 class="text-xs">{{ '@'.$user->username }}</h6>
                    </div>
                </a>

                <div class="flex items-center mr-3">
                    <x-follow-button :user="$user"></x-follow-button>
                </div>
            </div>

        @empty
            <div class="flex justify-center text-blue-500 font-bold">There is no results...</div>
        @endforelse

        {{ $users->links() }}
    </div>
</x-app>