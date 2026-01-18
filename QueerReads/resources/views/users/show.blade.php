<x-app-layout>
    <h1>{{ $user->name }}'s Profile</h1>

    <p>Joined: {{ $user->created_at->format('M d, Y') }}</p>

    <h2>My Books</h2>

    @if ($user->userBooks->count())
        @foreach ($user->userBooks as $userBook)
            <div style="border:1px solid #ccc; padding:10px; margin-bottom:5px;">
                <h3>
                    <a href="{{ route('books.show', $userBook->book) }}">
                        {{ $userBook->book->title }}
                    </a>
                </h3>
                <p>Author: {{ $userBook->book->author }}</p>
                <p>Status: {{ $userBook->status ?? 'N/A' }}</p>
                <p>Rating: {{ $userBook->rating ?? 'N/A' }}</p>
                @if ($userBook->review)
                    <p>Review: {{ $userBook->review }}</p>
                @endif
            </div>
        @endforeach
    @else
        <p>This user has not added any books yet.</p>
    @endif
</x-app-layout>