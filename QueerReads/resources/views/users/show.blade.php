<x-app-layout>
    <h1 class="text-2x1 font-bold mb-2">{{ $user->name }}'s Profile</h1>

    <p>Joined: {{ $user->created_at->format('M d, Y') }}</p>

    <h2 class="text-x1 font-semibold mt-4">To Read</h2>
    @if(isset($userBooks['to_read']) && $userBooks['to_read']->count())
        @foreach($userBooks['to_read'] as $book)
            <div class="border p-2 mb-2 rounded">
                <h3 class="font-semibold">
                    <a href="{{ route('books.show', $book) }}">
                        {{ $book->title }}
                    </a>
                </h3>
                <p>Author: {{ $book->author }}</p>
            </div>
        @endforeach
    @else
        <p>This user has not added any books yet.</p>
    @endif

    <h2 class="text-x1 font-semibold mt-4">Reading</h2>
    @if(isset($userBooks['reading']) && $userBooks['reading']->count())
        @foreach($userBooks['reading'] as $book)
            <div class="border p-2 mb-2 rounded">
                <h3 class="font-semibold">
                    <a href="{{ route('books.show', $book) }}">
                        {{ $book->title }}
                    </a>
                </h3>
                <p>Author: {{ $book->author }}</p>
            </div>
        @endforeach
    @else
        <p>This user has not added any books yet.</p>
    @endif

    <h2 class="text-x1 font-semibold mt-4">Read</h2>
    @if(isset($userBooks['finished']) && $userBooks['finished']->count())
        @foreach($userBooks['finished'] as $book)
            <div class="border p-2 mb-2 rounded">
                <h3 class="font-semibold">
                    <a href="{{ route('books.show', $book) }}">
                        {{ $book->title }}
                    </a>
                </h3>
                <p>Author: {{ $book->author }}</p>
                <p>Rating: {{ $book->pivot->rating ?? 'N/A' }}</p>

                @if($book->pivot->review)
                    <p>Review: {{ $book->pivot->review }}</p>
                @endif
            </div>
        @endforeach
    @else
        <p>This user has not added any books yet.</p>
    @endif
</x-app-layout>