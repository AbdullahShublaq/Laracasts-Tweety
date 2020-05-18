<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-gray-400' }} ">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user ) }}">
            <img src="{{ $tweet->user->avatar  }}" alt="avatar" class="rounded-full mr-2"
                 style="width: 50px; height: 50px">
        </a>
    </div>

    <div>
        <h5 class="mb-4">
            <a class="font-bold" href="{{ route('profile', $tweet->user ) }}">{{ $tweet->user->name }}
            </a>
            .
            <span class="text-xs">{{ $tweet->created_at->diffForHumans() }}</span>
        </h5>

        <p class="text-sm mb-3">
            {{ $tweet->body }}
        </p>

        <x-like-buttons :tweet="$tweet"></x-like-buttons>
    </div>

</div>