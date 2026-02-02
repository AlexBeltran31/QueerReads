<x-app-layout>
    <section class="relative bg-black min-h-screen pt-1 pb-5">
        <div class="relative mx-w-5xl mx-auto bg-white rounded-3xl shadow-xl px-10 py-10">
            <div class="mb-8">
                <h1 class="text-2xl font-semibold text-pink-600">
                    {{ $category->name}}
                </h1>
                <p class="text-sm text-zinc-500">
                    Books in this category
                </p>
            </div>

            @if ($category->books->isEmpty())
                <p class="text-zinc-500">
                    No books found in this category
                </p>
            @else
                <div class="space-y-6">
                    @foreach ($category->books as $book)
                        <div>
                            <h3 class="font-medium text-lg">
                                <a href="{{ route('books.show', $book) }}"
                                    class="hover:underline">
                                     {{ $book->title}}
                                </a>
                            </h3>

                            <p class="text-sm text-zinc-600">
                                {{ $book->author }}
                                <span class="text-pink-500">
                                    - {{ $category->name }}
                                </span>
                            </p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section> 
</x-app-layout>