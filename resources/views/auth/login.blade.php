<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 rounded-xl border border-gray-300">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    {{--start of email input--}}
                    <div class="mb-6">
                        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            {{ __('E-Mail Address') }}
                        </label>

                        <input id="email" type="email"
                               class="border border-gray-400 p-1 w-full"
                               name="email" value="{{ old('email') }}"
                               required autocomplete="email" autofocus>

                        @error('email')
                        <p class="text-red-500 tex-xs mt-2">
                            {{ $message }}
                        </p>
                        @enderror

                    </div>
                    {{--end of email input--}}

                    {{--start of password input--}}
                    <div class="mb-6">
                        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            {{ __('Password') }}
                        </label>

                        <input id="password" type="password"
                               class="border border-gray-400 p-1 w-full"
                               name="password"
                               required autocomplete="current-password">

                        @error('password')
                        <p class="text-red-500 tex-xs mt-2">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    {{--end of password input--}}

                    {{--start of remeberme input--}}
                    <div class="mb-6">
                        <div>
                            <input class="mr-1" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="text-xs text-gray-700 font-bold uppercase" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    {{--end of remeberme input--}}

                    {{--start of submit button--}}
                    <div>
                        <button type="submit"
                                class="bg-blue-400 text-white rounded mr-2 py-2 px-4 hover:bg-blue-500">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('register'))
                            <a class="text-lg text-gray-700 " href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        @endif
                    </div>
                    {{--end of submit button--}}
                </form>
            </div>
        </div>
    </div>
</x-master>
