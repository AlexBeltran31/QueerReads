<x-app-layout>
    <section class="relative bg-black min-h-screen pt-1 pb-5">
        <div class="relative mx-w-5xl mx-auto bg-white rounded-3xl shadow-xl px-10 py-10">

            <h1 class="text-2xl font-semibold mb-8">
                Add Book
            </h1>

            <form method="POST"
                action="{{route('books.store') }}"
                class="grid grid-cols-10 md:grip-cols-2 gap-6">

                @csrf

                <input
                    type="text"
                    name="title"
                    placeholder="Title"
                    class="md:col-span-2 rounded-xl border-zinc-300 focus:ring-pink-500 focus:border-pink-500"
                    required
                >
                <input
                    type="text"
                    name="author"
                    placeholder="Author"
                    class="md:col-span-2 rounded-xl border-zinc-300 focus:ring-pink-500 focus:border-pink-500"
                    required
                >

                <input
                    type="number"
                    name="publication_year"
                    placeholder="Year"
                    class="md:col-span-2 rounded-xl border-zinc-300 focus:ring-pink-500 focus:border-pink-500"
                    required
                >

                <select 
                    name="category_id"
                    class="md:col-span-2 rounded-xl border-zinc-300 focus:ring-pink-500 focus:border-pink-500"
                    required
                >
                    <option value="">Select category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name}}
                        </option>
                    @endforeach
                </select>

                <textarea
                    name="description"
                    rows="2"
                    placeholder="Description"
                    class="md:col-span-6 rounded-xl border-zinc-300 focus:ring-pink-500 focus:border-pink-500"
                    ></textarea>

                <button
                    type="submit"
                    class="md:col-span-2 bg-pink-500 text-white rounded-full px-6 py-2 hover:bg-pink-600 transition"
                >
                    Save
                </button>
            </form>
        </div>
    </section>
</x-app-layout>