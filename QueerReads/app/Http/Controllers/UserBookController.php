<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\UserBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserBookController extends Controller
{
    public function store(Request $request, Book $book) {
        $request->validate([
            'rating' => 'nullable|integer|min:1|max:5',
            'reviews' => 'nullable|string|max:1000',
            'status' => 'nullable|string|in:reading,finished,to_read'
        ]);

        UserBook::updateOrCreate(
            ['user_id' => Auth::id(), 'book_id' => $book->id],
            $request->only('rating', 'review', 'status')
        );

        return back()->with('success', 'Book added/updated in your list.');
    }
}
