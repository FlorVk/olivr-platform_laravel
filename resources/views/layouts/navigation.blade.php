<nav class="side-block" x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div class="navigation block1_left">
        <div class="flex flex-column py-2 ">

            <!-- Name + logo -->
            <div class="flex align-center flex-column">

                <!-- Logo -->
                <div class="shrink-0 flex items-center padding-right">
                    <a href="/dashboard">
                        <x-application-logo />
                    </a>
                </div>

                <!-- Navigatie -->

                <ul class="flex flex-column menu_items">
                    <li><a href=""><img class="nav-icon" src="" alt=""><a class="menu_item" href="/dashboard">Dashboard</a></a></li>
                    <li><a href=""><img class="nav-icon" src="" alt=""><a class="menu_item" href="/timeout">Time-out</a></a></li>
                    <li><a href=""><img class="nav-icon" src="" alt=""><a class="menu_item" href="/vr">VR</a></a></li>
                    <li><a href=""><img class="nav-icon" src="" alt=""><a class="menu_item" href="/settings">Instellingen</a></a></li>
                </ul>
                
            </div>

            <!-- Navigatie footer -->
            <div class="block-bottom">
                @if (Auth::check())


                    <form class="padding-right font-white" method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>

                @else
                    <a class="padding-right menu_login" href="/login">Login</a>
                    <a class="menu_login" href="/register">Register</a>
                @endif

                
            </div>

            
            
            
        </div>
    </div>

</nav>