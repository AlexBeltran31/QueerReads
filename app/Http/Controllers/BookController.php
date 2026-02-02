<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index(Request $request) {
        $query = Book::with('category');

        if ($request->filled('search')){
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')->orWhere('author','like','%' . $request->search . '%');
            });
        }
        $books = $query->get();
        return view('books.index', compact('books'));
    }
    public function create() {
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }
    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'publication_year' => 'nullable|integer',
        ]);

        Book::create($validated);

        return redirect()->route('books.index');
    }
    public function show(Book $book) {
        $book->load('category');
        return view('books.show', compact('book'));
    }
}
