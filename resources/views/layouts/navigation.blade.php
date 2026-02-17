<nav class="navbar bg-base-100 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex-1">
                <a href="{{ route('home') }}" class="btn btn-ghost normal-case text-xl">
                    <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    {{ config('app.name', 'Jadwal Dosen') }}
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="flex-none hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="{{ route('home') }}" class="btn btn-ghost">Home</a></li>
                    <li><a href="{{ route('schedule.index') }}" class="btn btn-ghost">Jadwal</a></li>
                    <li><a href="{{ route('dosen.index') }}" class="btn btn-ghost">Dosen</a></li>
                    
                    @auth
                        <li>
                            <details>
                                <summary class="btn btn-ghost">
                                    {{ Auth::user()->name }}
                                </summary>
                                <ul class="p-2 bg-base-100 z-50 shadow">
                                    <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="w-full text-left">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </details>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="btn btn-ghost">Login</a></li>
                        <li><a href="{{ route('register') }}" class="btn btn-primary">Register</a></li>
                    @endauth
                </ul>
            </div>

            <!-- Theme Toggle -->
            <button id="theme-toggle" class="btn btn-ghost btn-circle ml-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
            </button>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button onclick="toggleMobileMenu()" class="btn btn-ghost btn-circle">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden">
            <ul class="menu menu-vertical px-1 mt-4">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('schedule.index') }}">Jadwal</a></li>
                <li><a href="{{ route('dosen.index') }}">Dosen</a></li>
                
                @auth
                    <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
