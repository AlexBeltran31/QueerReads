<x-app-layout>
    <h1>{{ $book->title }}</h1>

    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Category:</strong> {{ $book->category->name }}</p>
    <p>{{ $book->description }}</p>

    @auth
    <form method="POST" action="{{ route('userbooks.store', $book) }}">
        @csrf

        <label>Status:</label>
        <select name="status">
            <option value="">Select status</option>
            <option value="to_read">Want to read</option>
            <option value="reading">Reading</option>
            <option value="finished">Read</option>
        </select>

        <label>Rating (1-5):</label>
        <input type="number" name="rating" min="1" max="5">

        <label>Review:</label>
        <textarea name="review"></textarea>

        <button type="submit">Save</button>
    </form>
    @endauth

    <h3>Reviews:</h3>
    @forelse ($book->userBooks()->whereNotNull('review')->with('user')->get() as $ub)
        <p>
            <strong>{{ $ub->user->name }}</strong>: {{ $ub->review }}
            (Rating: {{ $ub->rating ?? 'N/A' }})
        </p>
    @empty
        <p>No reviews yet.</p>
    @endforelse
</x-app-layout>