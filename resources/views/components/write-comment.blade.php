<form class="mt-2" action="/tweets/{{ $tweet->id }}/comment" method="POST">
    @csrf
    <div>
        <textarea id="comment_body"
                  class="border border-gray-500 p-1 w-full pl-2 rounded-lg focus:border-white"
                  name="comment_body"
                  placeholder="Write Comment..."></textarea>

        <button type="submit"
                class="bg-blue-400 text-sm text-white rounded rounded-xl py-2 px-4 hover:bg-blue-500"
        >
            <div class="flex items-center text-sm">
                <span class="text-xs font-semibold mr-2">Send</span>

                <svg viewBox="0 0 20 20" class="text-blue-400 w-3">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g class="fill-current text-white">
                            <path d="M0,0 L20,10 L0,20 L0,0 Z M0,8 L10,10 L0,12 L0,8 Z"></path>
                        </g>
                    </g>
                </svg>
            </div>

        </button>
    </div>
</form>

@error('comment_body')
<p class="text-red-500 text-sm mt-4">{{ $message }}</p>
@enderror