<x-app>
    <div>
        @foreach($users as $user)
            <div class="flex border border-gray-400 rounded-lg mb-3 justify-between">
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
        @endforeach

        {{ $users->links() }}
    </div>
</x-app>