<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <div class="mb-2 rounded rounded-xl"
                 style="
                         background-image: url({{ $user->banner }});
                         background-size: cover;
                         background-repeat: no-repeat;
                         height: 300px; width: 100%"
            >
            </div>
            {{--<img src="{{ $user->banner }}" alt="profile-banner" class="mb-2 rounded rounded-xl" style="height: 300px; width: 100%">--}}

            <img src="{{ $user->avatar }}" alt=""
                 class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 lg:translate-y-1/2 translate-y-2/3"
                 style="left: 50%; max-width: 150px; max-height: 150px "
                 width="150"
                 height="150">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <h6 class="font-bold text-md-center mb-0">{{ '@'.$user->username }}</h6>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a href="{{ $user->path('edit') }}"
                       class="rounded-full border border-gray-300 py-2 px-4 text-black text-md-center mr-2">
                        Edit Profile
                    </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            {{ $user->description }}
        </p>


    </header>

    @include('_time-line', [
        'tweets' => $tweets
    ])
</x-app>
