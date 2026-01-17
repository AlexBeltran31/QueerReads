<h1>{{ $category->name }}</h1>

@if ($category->books->count())
    @foreach ($category->books as $book)
        <div>
            <h3>
                <a href="{{ route('books.show', $book) }}">
                    {{ $book->title }}
                </a>
            </h3>
            <p>{{ $book->author }}</p>
        </div>
    @endforeach
@else
    <p>No books found in this category yet.</p>
@endif