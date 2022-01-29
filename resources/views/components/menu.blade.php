<header class="px-6 bg-white flex flex-wrap items-center lg:py-0 py-2">
    <div class="flex-1 flex justify-between items-center font-black text-gray-700">
        <a href="/dashboard">Dashboard</a>
    </div>

    <label for="menu-toggle" class="cursor-pointer lg:hidden block">
        <svg class="fill-current text-gray-600 hover:text-gray-800" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <title>menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
        <nav>
            <ul class="lg:flex items-center justify-between text-sm font-medium text-gray-700 pt-4 lg:pt-0">
                @auth
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent text-gray-600 hover:text-gray-900" href="/company">Company</a></li>
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent text-gray-600 hover:text-gray-900" href="/employee">Employee</a></li>
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent text-gray-600 hover:text-gray-900" href="/client">Clients</a></li>
                <li>
                    <form id="logout-form" method="POST" action="/logout">
                        @csrf
                        <button class="lg:p-4 py-3 px-0 block border-b-2 border-transparent text-gray-600 hover:text-gray-900" @click.prevent="document.querySelector('#logout-form').submit()">Logout</button>
                    </form>
                </li>

                @endauth

            </ul>
        </nav>
    </div>

</header>
