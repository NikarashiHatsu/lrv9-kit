<ul class="menu p-4">
    {{-- Dashboard --}}
    <li class="menu-title">
        <span>
            Dashboard
        </span>
    </li>
    <li>
        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span>
                Dashboard
            </span>
        </a>
    </li>
    <ul x-data='{ open: false }'>
        <li>
            <a href="javascript:void(0)" x-on:click="open = !open">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span class="w-full flex items-center justify-between">
                    <span>
                        Dropdown Example
                    </span>
                    <span class="transition-transform duration-300 ease-in-out" x-bind:class="open ? 'rotate-90' : 'rotate-0'">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </span>
            </a>
        </li>
        <ul class="ml-7" x-show="open" x-transition>
            <li>
                <a href="javascript:void(0)">
                    Dropdown 1
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    Dropdown 2
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    Dropdown 3
                </a>
            </li>
        </ul>
    </ul>

    {{-- User Control --}}
    <li class="menu-title mt-4">
        <span>
            User Control
        </span>
    </li>
    <form action="{{ route('logout') }}" method="post" x-ref="form" x-data>
        @csrf
        <li>
            <a
                href="javascript:void(0)"
                type="submit"
                class="hover:bg-red-500 hover:text-white"
                x-on:click="$refs.form.submit()"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span class="ml-2">
                    Log Out
                </span>
            </a>
        </li>
    </form>
</ul>