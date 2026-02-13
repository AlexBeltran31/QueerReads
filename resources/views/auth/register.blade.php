<x-app-layout>
    <section class="relative bg-black min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-white rounded-3xl shadow-xl px-10 py-10">

            <h1 class="text-2xl font-semibold text-pink-500 mb-6 text-center">
                Create Account
            </h1>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium mb-1">
                        Name
                    </label>
                    <input type="text"
                           name="name"
                           required
                           class="w-full rounded-xl border-zinc-300 focus:ring-pink-500 focus:border-pink-500">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">
                        Email
                    </label>
                    <input type="email"
                           name="email"
                           required
                           class="w-full rounded-xl border-zinc-300 focus:ring-pink-500 focus:border-pink-500">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">
                        Password
                    </label>
                    <input type="password"
                           name="password"
                           required
                           class="w-full rounded-xl border-zinc-300 focus:ring-pink-500 focus:border-pink-500">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">
                        Confirm Password
                    </label>
                    <input type="password"
                           name="password_confirmation"
                           required
                           class="w-full rounded-xl border-zinc-300 focus:ring-pink-500 focus:border-pink-500">
                </div>

                <button type="submit"
                        class="w-full py-2 rounded-full bg-pink-500 text-white text-sm font-medium hover:bg-pink-600 transition">
                    Register
                </button>
            </form>

        </div>
    </section>
</x-app-layout>
