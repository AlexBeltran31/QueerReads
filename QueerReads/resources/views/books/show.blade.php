<x-app-layout>
    <h1>{{ $book->title }}</h1>

    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Category:</strong> {{ $book->category->name }}</p>
    <p>{{ $book->description }}</p>

    @auth
    <form method="POST" action="{{ route('userbooks.store', $book) }}" class="mt-4">
        @csrf
        <input type="hidden" name="book_id" value="{{ $book->id }}">

        <div class="mb-2">
            <label for="status" class="block font-semibold">Status:</label>
            <select name="status" id="statusSelect" required class="border p-2 w-full">
                <option value="">Select status</option>
                <option value="to_read">Want to read</option>
                <option value="reading">Reading</option>
                <option value="finished">Read</option>
            </select>
        </div>

        <div id="reviewSection" class="hidden">
            <div class="mb-2">
                <label for="review" class="block font-semibold">Review:</label>
                <textarea name="review" id="review" class="border p-2 w-full" placeholder="Write your review..."></textarea>
            </div>

            <div class="mb-2">
                <label for="rating" class="block font-semibold">Rating:</label>
                <select name="rating" id="rating" class="border p-2 w-full">
                    <option value="">Select rating</option>
                    <option value="1">★</option>
                    <option value="2">★★</option>
                    <option value="3">★★★</option>
                    <option value="4">★★★★</option>
                    <option value="5">★★★★★</option>
                </select>
            </div>
        </div>

        <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded mt-2">
            Add to My List
        </button>
    </form>
    <script>
        const statusSelect = document.getElementById('statusSelect');
        const reviewSection = document.getElementById('reviewSection');

        statusSelect.addEventListener('change', function() {
            if (this.value === 'finished') {
                reviewSection.classList.remove('hidden');
            } else {
                reviewSection.classList.add('hidden');
                document.getElementById('review').value == '';
                document.getElementById('rating').value == '';
            }
        });
    </script>
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