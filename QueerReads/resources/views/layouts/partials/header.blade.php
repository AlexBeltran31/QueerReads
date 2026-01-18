<header style="border-bottom:1px solid #ddd; padding:10px;">
    <nav style="display:flex; justify-content:space-between; align-items:center;">

        <div>
            <a href="{{ route('books.index') }}">
                Queer Library
            </a>
        </div>

        <form method="GET" action="{{ route('books.index') }}">
            <input
                type="text"
                name="search"
                placeholder="Search books or authors"
                value="{{ request('search') }}"
            >
        </form>

        <div>
            <a href="{{ route('books.index') }}">Books</a>
            <div style="display:inline-block; position:relative;">
                <button
                    type="button"
                    onclick="toggleCategories()"
                    style="background:none; border:none; cursor:pointer;"
                >
                    Categories ▼
                </button>

                <ul 
                    id="categoriesDropdown"
                    style="
                        display:none;
                        position:absolute;
                        background:white;
                        list-style:none;
                        padding:4px 0;
                        margin:0;
                        border:1px solid #ddd;
                        min-width:160px;
                        z-index:1000;
                    "
                >
                    @foreach ($allCategories as $category)
                        <li style="padding:2px 10px;">
                            <a
                                href="{{ route('categories.show', $category) }}"
                                style="display:block; font-size:14px; white-space:nowrap;"
                            >
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            @auth
                <a href="{{ route('users.show', auth()->user()) }}">My Profile</a>

                <a href="{{ route('profile.edit') }}">Edit Profile</a>

                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>
</header>