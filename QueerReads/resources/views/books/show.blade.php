<h1>{{ $book->title }}</h1>

<p><strong>Author:</strong> {{ $book->author }}</p>
<p><strong>Category:</strong> {{ $book->category->name }}</p>
<p>{{ $book->description }}</p>