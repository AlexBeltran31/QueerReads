<x-app-layout>
    <h1>Add Book</h1>

    <form method="POST" action="{{route('books.store') }}">
        @csrf

        <input name="title" placeholder="Title" required>
        <input name="author" placeholder="Author" required>

        <select name="category_id" required>
            <option value="">Select category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name}}
                </option>
            @endforeach
        </select>

        <textarea name="description" placeholder="Description"></textarea>
        <input name="publication_year" placeholder="Year">

        <button type="submit">Save</button>
    </form>
</x-app-layout>