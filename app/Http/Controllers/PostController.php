<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\ReviewRating;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show($slug)
    {
        $kegiatan = Kegiatan::findOrFail($slug);
        $comments = $kegiatan->comments;

        return view('content', compact('kegiatan', 'comments'));
    }

    public function storeComment(Request $request, $slug)
    {
        $kegiatan = Kegiatan::findOrFail($slug);

        $comments = new ReviewRating();
        $comments->comments = $request->input('comments');

        $kegiatan->comments()->save($comments);

        return redirect('/post/' . $kegiatan->slug);
    }
}
