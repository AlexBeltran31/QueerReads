@php
    $categoryColors = [
        'LGBTQ+ History' => 'text-green-600',
        'Trans Studies' => 'text-blue-500',
        'Lesbian Fiction' => 'text-red-500',
        'Gay Fiction' => 'text-purple-500',
        'Queer Autobiography' => 'text-orange-500',
    ];
@endphp

<x-app-layout>
    <section class="relative bg-black min-h-screen pt-1 pb-5">
        <div class="relative mx-x-5xl mx-auto bg-white rounded-3xl shadow-xl px-10 py-10">

            <div class="flex justify-between items-center mb-8">
                <h1 class="text-2xl font-semibold text-zinc-900">
                    ✨ Books ✨
                </h1>
                @auth
                    <a href="{{ route('books.create') }}"
                        class="text-sm text-pink-500 hover:underline">
                        + Add Book
                    </a>             
                @endauth
            </div>
                
            @if ($books->isEmpty())
                <p>No books found matching your search.</p>
            @else
                <div class="space-y-6">
                    @foreach ($books as $book)
                        <div>
                            <h3 class="font-medium text-lg flex items-center gap-2">
                                <span class="{{ $categoryColors[$book->category->name] ?? 'text-zinc-400' }}">
                                    ♥
                                </span>
                                <a href="{{ route('books.show', $book) }}"
                                    class="hover:underline">
                                    {{ $book->title }}
                                </a>
                            </h3>

                            <p class="text-sm text-zinc-500">
                                {{ $book->author }} - 
                                <a href="{{ route('categories.show', $book->category) }}"
                                    class="text-pink-500 hover:underline">
                                    {{ $book->category->name }}
                                </a>
                            </p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-app-layout>