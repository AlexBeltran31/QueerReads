<h1>Categories</h1>

<u1>
@foreach ($categories as $category)
    <li>
        <a href="{{ route('categories.show', $category) }}">
            {{ $category->name }}
        </a>
    </li>
@endforeach
</u1>