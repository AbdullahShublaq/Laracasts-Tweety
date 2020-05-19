<p class="font-semibold font-xs mt-4">Comments :</p>

<div class="border border-gray-500 rounded-lg mb-2">

    @forelse($comments as $comment)
        <div class="flex p-4 {{ $loop->last ? '' : 'border-b border-gray-400' }}">
            <div class="mr-2 flex-shrink-0">
                <a href="{{ route('profile', $comment->user ) }}">
                    <img src="{{ $comment->user->avatar  }}" alt="avatar" class="rounded-full mr-1"
                         style="width: 30px; height: 30px">
                </a>
            </div>

            <div class="w-full">
                <h5 class="mb-2">
                    <div class="flex justify-between">
                        <div>
                            <a class="font-bold text-xs"
                               href="{{ route('profile', $comment->user ) }}">{{ $comment->user->name }}
                            </a>
                            .
                            <span class="text-xxs">{{ $comment->created_at->diffForHumans() }}</span>
                        </div>

                        @can('destroy', $comment)
                            <form action="/tweets/{{ $comment->tweet_id }}/comment/{{ $comment->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-xxs text-white bg-pink-500 rounded rounded-xl py-1 px-2">
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

                                        <span class="text-xxs text-white">Remove Comment</span>
                                    </div>
                                </button>
                            </form>
                        @endcan
                    </div>
                </h5>

                <p class="text-sm mb-3">
                    {{ $comment->body }}
                </p>

                {{--<x-like-buttons :tweet="$tweet"></x-like-buttons>--}}

            </div>
        </div>
    @empty
        <div class="flex items-center w-full justify-center py-1">
            <p class="text-xs font-semibold text-blue-500">There is no comments yet...!</p>
        </div>
    @endforelse

    {{--@if((! $tweet->comments->isEmpty()))--}}
        {{--<div class="flex items-center w-full justify-center py-1">--}}
            {{--<a href="/tweets/{{ $tweet->id }}" class="text-xs font-semibold text-blue-500">See More Comments...</a>--}}
        {{--</div>--}}
    {{--@endif--}}
</div>