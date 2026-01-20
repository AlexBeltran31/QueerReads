<x-app-layout>
    <section class="relative bg-black min-h-screen pt-1 pb-5">
        <div class="relative mx-w-5xl mx-auto bg-white rounded-3xl shadow-xl px-10 py-10">

            <h1 class="text-4xl font-semibold mb-1 text-pink-500">✨ {{ $user->name }}'s Profile ✨</h1>

            @if($user->pronouns)
                <p class="text-2xl text-zinc-500 mt-1">
                    Pronouns: {{ $user->pronouns }}
                </p>
            @endif

            <p class="text-sm text-zinc-500 mb-8">
                Joined: {{ $user->created_at->format('M d, Y') }}
            </p>

            <div class="mb-10">
                <h2 class="text-xl font-semibold mb-4">
                    To Read
                </h2>
            
                @if(isset($userBooks['to_read']) && $userBooks['to_read']->count())
                    <div class="space-y-3">
                        @foreach($userBooks['to_read'] as $book)
                            <div class="bg-zinc-50 rounded-xl px-5 py-4">
                                <h3 class="font-medium">
                                    <a href="{{ route('books.show', $book) }}">
                                        {{ $book->title }}
                                    </a>
                                </h3>
                                <p class="text-sm text-zinc-500">
                                    {{ $book->author }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-sm text-zinc-500">
                        No books added yet.
                    </p>
                @endif
            </div>

            <div class="mb-10">
                <h2 class="text-xl font-semibold mb-4">
                    Reading
                </h2>

                @if(isset($userBooks['reading']) && $userBooks['reading']->count())
                    <div class="space-y-3">
                        @foreach($userBooks['reading'] as $book)
                            <div class="bg-zinc-50 rounded-xl px-5 py-4">
                                <h3 class="font-medium">
                                    <a href="{{ route('books.show', $book) }}"
                                        class="hover:underline">
                                        {{ $book->title }}
                                    </a>
                                </h3>
                                <p class="text-sm text-zinc-500">
                                    {{ $book->author }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-sm text-zinc-500">
                        No books currently being read.
                    </p>
                @endif
            </div>

            <div>
                <h2 class="text-xl font-semibold mt-4">
                    Finished
                </h2>

                @if(isset($userBooks['finished']) && $userBooks['finished']->count())
                    <div class="space-y-4">
                        @foreach($userBooks['finished'] as $book)
                            <div class="bg-zinc-50 rounded-xl px-5 py-4">
                                <h3 class="font-medium">
                                    <a href="{{ route('books.show', $book) }}"
                                        class="hover:underline">
                                        {{ $book->title }}
                                    </a>
                                </h3>
                                <p class="text-sm text-zinc-500">
                                    {{ $book->author }}
                                </p>
                                <div class="mt-2 text-sm text-zinc-600">
                                    Rating: 
                                    <span class="font-medium">
                                        {{ $book->pivot->rating ?? 'N/A' }}
                                    </span>
                                </div>


                                @if($book->pivot->review)
                                    <p class="mt-2 text-sm text-zinc-600 italic">
                                        Review: "{{ $book->pivot->review }}"
                                    </p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-sm text-zinc-500">
                        No finished books yet.
                    </p>
                @endif
            </div>
            
        </div>
    </section>
</x-app-layout>