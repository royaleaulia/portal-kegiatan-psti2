<?php

namespace App\Http\Controllers;


use App\Models\Kegiatan;
use App\Models\ReviewRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewRatingController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'destroy']);
    }

    public function store(Request $request, Kegiatan $kegiatan)
    {
        $request->validate(['comment' => 'required']);

        ReviewRating::create([
            'id' => Auth::user()->id,
            'id' => $kegiatan->id,
            'content' => $request->comments

        ]);
        return back();
    }

    public function destroy(ReviewRating $comment)
    {
        if ($comment->user->id !== Auth::user()->id) {
            abort(403);
        }
        $comment->delete();
        return back();
    }
}
