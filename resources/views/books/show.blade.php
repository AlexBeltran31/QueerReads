<x-app-layout>
    <section class="relative bg-black min-h-screen pt-1 pb-5">
        <div class="relative mx-w-5xl mx-auto bg-white rounded-3xl shadow-xl px-10 py-10">
            
            <div class="mb-10">
                <h1 class="text-2xl font-semibold mb-2">
                    {{ $book->title }}
                </h1>

                <p class="text-zinc-600">
                    {{ $book->author }}
                    <span class="text-pink-500">
                        - {{ $book->category->name }}
                    </span>
                </p>

                @if($book->description)
                    <p class="mt-4 text-zinc-700 leading-relaxed">
                        {{ $book->description }}
                    </p>
                @endif
            </div>

            @auth
                <div class="mb-12 border-t pt-8">
                    <h2 class="text-xl font-semibold mb-4">
                        Add to your reading list
                    </h2>

                    <form method="POST" 
                          action="{{ route('userbooks.store', $book) }}" 
                          class="space-y-4">
                        @csrf

                        <div>
                            <label class="block text-sm font-medium mb-1">
                                Status
                            </label>
                            <select name="status"
                                    id="statusSelect"
                                    required
                                    class="w-full rounded-xl border-zinc-300 focus:ring-pink-500 focus:border-pink-500">
                                <option value="">Select status</option>
                                <option value="to_read">Want to read</option>
                                <option value="reading">Reading</option>
                                <option value="finished">Finished</option>
                            </select>
                        </div>

                        <div id="reviewSection" class="hidden space-y-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">
                                    Review:
                                </label>
                                <textarea name="review"
                                id="review"
                                rows="3"
                                class="w-full rounded-xl border-zinc-300 focus:ring-pink-500 focus:border-pink-500"
                                placeholder="Write your thoughts..."></textarea>
                            </div>

                            <div>
                                <label class="block text-sm font-medium mb-1">
                                    Rating:
                                </label>
                                <select name="rating"
                                        id="rating"
                                        class="w-full rounded-xl border-zinc-300 focus:ring-pink-500 focus:border-pink-500">
                                    <option value="">Select rating</option>
                                    <option value="1">★</option>
                                    <option value="2">★★</option>
                                    <option value="3">★★★</option>
                                    <option value="4">★★★★</option>
                                    <option value="5">★★★★★</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit"
                        class="mt-2 inline-flex items-center px-5 py-2 rounded-full
                                bg-pink-500 text-white text-sm font-medium
                                hover:bg-pink-600 transition">
                            Add to My List
                        </button>
                    </form>
            @endauth

                <div class="border-t pt-8">
                    <h2 class="text-xl font-semibold mb-6">
                        Reviews
                    </h2>

                    @forelse ($book->userBooks()->whereNotNull('review')->with('user')->get() as $ub)
                        <div class="mb-5 bg-zinc-50 rounded-xl px-5 py-4">
                            <p class="text-sm text-zinc-600 mb-1">
                                <span class="font-medium text-zinc-800">
                                    {{ $ub->user->name }}
                                </span>
                                @if($ub->rating)
                                    · Rating: {{ $ub->rating }}/5
                                @endif
                            </p>

                            <p class="text-zinc-700 italic">
                                "{{ $ub->review }}"
                            </p>
                        </div>
                    @empty
                        <p class="text-sm text-zinc-500">
                            No reviews yet.
                        </p>
                    @endforelse
                </div>

            </div>
        </section>

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
</x-app-layout>