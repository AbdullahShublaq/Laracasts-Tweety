<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="profile-banner" class="mb-2">

            <img src="{{ $user->avatar }}" alt=""
                 class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                 style="left: 50%"
                 width="150">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div  style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-md-center mr-2">
                        Edit Profile
                    </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam assumenda distinctio dolorem, ea eaque
            enim, esse facilis illo neque obcaecati pariatur praesentium quasi quis sunt temporibus totam ut
            voluptatibus!
        </p>


    </header>

    @include('_time-line', [
        'tweets' => $tweets
    ])
</x-app>
