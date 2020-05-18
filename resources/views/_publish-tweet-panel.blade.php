<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form action="tweets" method="POST">
        @csrf

        <textarea name="body" class="w-full px-4 py-2" placeholder="What's up doc?" required></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img src="{{ auth()->user()->avatar  }}" alt="avatar" class="rounded-full mr-2"
                 style="width: 50px; height: 50px;">
            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 rounded-xl shadow py-2  px-10 text-sm text-white">
                <div class="flex items-center">
                    <span class="text-xs text-white">Publis</span>

                    <svg viewBox="0 0 20 20" class="text-white ml-1 w-3">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="fill-current">
                                <path d="M0,0 L20,10 L0,20 L0,0 Z M0,8 L10,10 L0,12 L0,8 Z" id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                </div>
            </button>
        </footer>
    </form>

    @error('body')
    <p class="text-red-500 text-sm mt-4">{{ $message }}</p>
    @enderror

</div>