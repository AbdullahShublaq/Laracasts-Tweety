<div class="bg-gray-300 border border-gray-300 rounded-xl p-4">
    <h3 class="font-bold text-xl mb-4">Followings</h3>
    <hr class="pb-4 border-gray-500">
    <ul>
        @forelse(auth()->user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4' }}">
                <div>
                    <a href="{{ route('profile', $user ) }}" class="flex items-center text-sm">
                        <img src="{{ $user->avatar }}" alt="avatar" class="rounded-full mr-2"
                             style="width: 40px; height: 40px">
                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li>No Friends Yet!</li>
            <a href="/explore" class="text-xs text-blue-600">Let's Follow Friends</a>
        @endforelse
    </ul>
</div>
