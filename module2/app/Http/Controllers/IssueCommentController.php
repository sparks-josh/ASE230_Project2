<?php

namespace App\Http\Controllers;

use App\Models\IssueComment;
use Illuminate\Http\Request;

class IssueCommentController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string'
        ]);

        $comment = IssueComment::create([
            'comment' => $request->comment,
            'issue_id' => $id,
            'user_id' => auth()->id()
        ]);

        return response()->json($comment, 201);
    }
}