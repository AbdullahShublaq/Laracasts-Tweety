<x-app>
    <div class="border border-gray-300 rounded-xl mb-6">
        <div class="flex p-4">
            <div class="mr-2 flex-shrink-0">
                <a href="{{ route('profile', $tweet->user ) }}">
                    <img src="{{ $tweet->user->avatar  }}" alt="avatar" class="rounded-full mr-2"
                         style="width: 50px; height: 50px">
                </a>
            </div>

            <div class="w-full">
                <h5 class="mb-4">
                    <div class="flex justify-between">
                        <div>
                            <a class="font-bold" href="{{ route('profile', $tweet->user ) }}">{{ $tweet->user->name }}
                            </a>
                            .
                            <span class="text-xs">{{ $tweet->created_at->diffForHumans() }}</span>
                        </div>

                        @can('destroy', $tweet)
                            <form action="/tweets/{{ $tweet->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-xs text-white bg-red-600 rounded rounded-xl py-1 px-2">
                                    <div class="flex items-center">
                                        <svg viewBox="0 0 20 20" class="text-white mr-1 w-3">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                               fill-rule="evenodd">
                                                <g class="fill-current">
                                                    <path d="M2,2 L18,2 L18,4 L2,4 L2,2 Z M8,0 L12,0 L14,2 L6,2 L8,0 Z M3,6 L17,6 L16,20 L4,20 L3,6 Z M8,8 L9,8 L9,18 L8,18 L8,8 Z M11,8 L12,8 L12,18 L11,18 L11,8 Z"
                                                          id="Combined-Shape"></path>
                                                </g>
                                            </g>
                                        </svg>

                                        <span class="text-xs text-white">Remove Tweet</span>
                                    </div>
                                </button>
                            </form>
                        @endcan
                    </div>
                </h5>

                <p class="text-sm mb-3">
                    {{ $tweet->body }}
                </p>
                @if($tweet->image)
                    <img class="border border-gray-400 rounded-xl" style="max-height: 350px" src="{{ $tweet->image }}"
                         alt="">
                @endif

                <x-like-buttons :tweet="$tweet"></x-like-buttons>

                <x-comments :comments="$tweet->comments"></x-comments>

                <x-write-comment :tweet="$tweet"></x-write-comment>
            </div>

        </div>
    </div>
</x-app>