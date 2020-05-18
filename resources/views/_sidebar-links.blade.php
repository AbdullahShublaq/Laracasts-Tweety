<div class="border border-gray-300 rounded-xl p-4 mb-6">
    <h3 class="font-bold text-xl mb-4">Menu</h3>
    <hr class="pb-4 border-gray-500">
    <ul>
        <li>
            <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">
                <div class="flex items-center">
                    <svg viewBox="0 0 20 20" class="text-blue-400 mr-2 w-5">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="fill-current">
                                <path d="M17,10 L20,10 L10,0 L0,10 L3,10 L3,20 L17,20 L17,10 Z M8,14 L12,14 L12,20 L8,20 L8,14 Z"
                                      id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="text-xl text-black">Home</span>
                </div>
            </a>
        </li>
        <li>
            <a href="/explore" class="font-bold text-lg mb-4 block">
                <div class="flex items-center">
                    <svg viewBox="0 0 20 20" class="text-blue-400 mr-2 w-5">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="fill-current">
                                <path d="M10,20 C15.5228475,20 20,15.5228475 20,10 C20,4.4771525 15.5228475,0 10,0 C4.4771525,0 0,4.4771525 0,10 C0,15.5228475 4.4771525,20 10,20 Z M7.87867966,7.87867966 L15.6568542,4.34314575 L12.1213203,12.1213203 L4.34314575,15.6568542 L7.87867966,7.87867966 Z M10,11 C10.5522847,11 11,10.5522847 11,10 C11,9.44771525 10.5522847,9 10,9 C9.44771525,9 9,9.44771525 9,10 C9,10.5522847 9.44771525,11 10,11 Z"
                                      id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="text-xl text-black">Explore</span>
                </div>
            </a>
        </li>
        {{--<li>--}}
        {{--<a href="/" class="font-bold text-lg mb-4 block">--}}
        {{--Notifications--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="/" class="font-bold text-lg mb-4 block">--}}
        {{--Messages--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="/" class="font-bold text-lg mb-4 block">--}}
        {{--Bookmarks--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="/" class="font-bold text-lg mb-4 block">--}}
        {{--Lists--}}
        {{--</a>--}}
        {{--</li>--}}
        <li>
            <a href="{{ route('profile', auth()->user()) }}" class="font-bold text-lg mb-4 block">
                <div class="flex items-center">
                    <svg viewBox="0 0 20 20" class="text-blue-400 mr-2 w-5">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="fill-current">
                                <path d="M4.99999861,5.00218626 C4.99999861,2.23955507 7.24419318,0 9.99999722,0 C12.7614202,0 14.9999958,2.22898489 14.9999958,5.00218626 L14.9999958,6.99781374 C14.9999958,9.76044493 12.7558013,12 9.99999722,12 C7.23857424,12 4.99999861,9.77101511 4.99999861,6.99781374 L4.99999861,5.00218626 Z M1.11022272e-16,16.6756439 C2.94172855,14.9739441 6.3571245,14 9.99999722,14 C13.6428699,14 17.0582659,14.9739441 20,16.6756471 L19.9999944,20 L0,20 L1.11022272e-16,16.6756439 Z"
                                      id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="text-xl text-black">Profile</span>
                </div>
            </a>
        </li>
        <li>
            <form action="/logout" method="POST">
                @csrf
                <button class="font-bold text-lg mb-4 block">
                    <div class="flex items-center">
                        <svg viewBox="0 0 20 20" class="text-blue-400 mr-2 w-5">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g class="fill-current">
                                    <path d="M0,10 C0,15.5228475 4.4771525,20 10,20 C15.5228475,20 20,15.5228475 20,10 C20,4.4771525 15.5228475,1.01453063e-15 10,0 C4.4771525,-1.01453063e-15 3.55271368e-15,4.4771525 0,10 L0,10 Z M2,10 C2,14.418278 5.581722,18 10,18 C14.418278,18 18,14.418278 18,10 C18,5.581722 14.418278,2 10,2 C5.581722,2 2,5.581722 2,10 L2,10 Z M10,8 L10,12 L15,12 L15,8 L10,8 L10,8 Z M5,10 L10,15 L10,5 L5,10 L5,10 Z"
                                          id="Combined-Shape"></path>
                                </g>
                        </svg>
                        <span class="text-xl text-black">Logout</span>
                    </div>
                </button>
            </form>
        </li>
    </ul>
</div>