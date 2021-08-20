<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CommentController extends Controller
{
    public function show()
    {
        $comments = Comment::orderBy('created_at','desc')->paginate(3);
        return view('index', compact('comments'));
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'body' => 'required',
        ]);

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->body = $request->body;
        $comment->save();

        return redirect()
            ->route('comment.index');
    }
}
