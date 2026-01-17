<h1>Books</h1>

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