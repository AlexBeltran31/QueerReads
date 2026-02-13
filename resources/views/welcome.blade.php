<x-app-layout>
    <section class="relative bg-black min-h-screen flex items-center justify-center">
        <div class="w-full max-w-xl bg-white rounded-3xl shadow-xl px-10 py-12 text-center">

            <h1 class="text-4xl font-semibold text-pink-500 mb-4">
                ✨Welcome to QueerReads✨
            </h1>

            <p class="text-zinc-600 mb-8">
                Track your reading, share reviews, and discover new LGBTQ+ books.
            </p>

            @guest
                <div class="flex justify-center gap-4">
                    <a href="{{ route('login') }}"
                       class="px-6 py-2 rounded-full bg-pink-500 text-white text-sm font-medium hover:bg-pink-600 transition">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="px-6 py-2 rounded-full border border-pink-500 text-pink-500 text-sm font-medium hover:bg-pink-50 transition">
                        Register
                    </a>
                </div>
            @else
                <a href="{{ route('dashboard') }}"
                   class="px-6 py-2 rounded-full bg-pink-500 text-white text-sm font-medium hover:bg-pink-600 transition">
                    Go to Dashboard
                </a>
            @endguest

        </div>
    </section>
</x-app-layout>
