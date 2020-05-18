<x-master>
    <section class="px-8 mb-10">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-center">
                {{--start of sidebar--}}
                @if(auth()->check())
                    <div class="lg:w-32">
                        @include('_sidebar-links')
                    </div>
                @endauth
                {{--end of sidebar--}}

                {{--start of content--}}
                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                    {{ $slot }}
                </div>
                {{--end of content--}}

                {{--start of friends--}}
                @if(auth()->check())
                    <div class="lg:w-1/6">
                        @include('_friends-list')
                    </div>
                @endauth
                {{--end of friends--}}
            </div>
        </main>
    </section>
</x-master>