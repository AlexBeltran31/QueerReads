<header class="w-full bg-black text-white border-b border-zinc-800">
    <nav class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

        <div>
            <a href="{{ route('books.index') }}"
                class="text-4xl font-semibold tracking-wide flex gap-0.5">
                <span class="text-red-500">Q</span>
                <span class="text-orange-500">u</span>
                <span class="text-yellow-400">e</span>
                <span class="text-green-500">e</span>
                <span class="text-blue-500">r</span>
                <span class="text-purple-500">R</span>
                <span class="text-red-500">e</span>
                <span class="text-orange-500">a</span>
                <span class="text-yellow-400">d</span>
                <span class="text-green-500">s</span>
            </a>
        </div>

        <form method="GET" action="{{ route('books.index') }}" class="relative">
            <input
                type="text"
                name="search"
                placeholder="Search books or authors"
                value="{{ request('search') }}"
                class="w-64 pl-10 pr-4 py-2 rounded-full
                        bg-white text-zinc-900 text-sm
                        focus:outline-none focus:ring-2 focus:ring-pink-400"
            >
            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-zinc-400">
                🔍
            </span>
        </form>

        <div class="flex items-center gap-6 text-base font-medium text-pink-500">

            <a href="{{ route('books.index') }}" class="hover:text-white">
                Books
            </a>
            <div class="relative">
                <button onclick="toggleCategories()" class="hover:text-white">
                    Categories ▼
                </button>

                <ul id="categoriesDropdown"
                    class="hidden absolute left-0 mt-2 bg-white text-zinc-900
                            rounded-xl shadow-lg border w-44 overflow-hidden z-50">
                    @foreach ($allCategories as $category)
                        <li>
                            <a
                                href="{{ route('categories.show', $category) }}"
                                class="block px-4 py-2 text-sm hover:bg-zinc-100">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            @auth
            <span class="text-zinc-600">|</span>
                <a href="{{ route('users.show', auth()->user()) }}" class="hover:text-white">
                    My Profile
                </a>
                <a href="{{ route('profile.edit') }}" class="hover:text-white">
                    Edit Profile
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="hover:text-white">Logout</button>
                </form>
            @else
                <span class="text-zinc-600">|</span>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>

    <script>
        function toggleCategories() {
            document.getElementById('categoriesDropdown')
                .classList.toggle('hidden');
        }
    </script>
</header>