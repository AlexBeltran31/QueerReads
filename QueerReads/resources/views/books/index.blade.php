<x-app-layout>
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2x1 font-bold">Books</h1>

        @auth
            <a href="{{ route('books.create') }}"
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Add Book
            </a>
        @endauth
    </div>
    
    @if ($books->isEmpty())
        <p>No books found matching your search.</p>
    @else
        @foreach ($books as $book)
            <div>
                <h3>
                    <a href="{{ route('books.show', $book) }}">
                        {{ $book->title }}
                    </a>
                </h3>
                <p>{{ $book->author }} - 
                    <a href="{{ route('categories.show', $book->category) }}">
                        {{ $book->category->name }}
                    </a>
                </p>
            </div>
        @endforeach
    @endif
</x-app-layout>