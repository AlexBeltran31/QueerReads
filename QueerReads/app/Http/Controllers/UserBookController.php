<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\UserBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserBookController extends Controller
{
    public function store(Request $request, Book $book) {
        $data = $request->validate([
            'rating' => 'nullable|integer|min:1|max:5',
            'review' => 'nullable|string|max:1000',
            'status' => 'nullable|string|in:reading,finished,to_read'
        ]);

        if ($data['status'] !== 'finished') {
            $data['rating'] = null;
            $data['review'] = null;
        }

        UserBook::updateOrCreate(
            ['user_id' => Auth::id(), 'book_id' => $book->id],
            $data
        );

        return back()->with('success', 'Book added/updated in your list.');
    }
}
