<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function index()
    {
        return Issue::all();
    }

    public function show($id)
    {
        return Issue::findOrFail($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'board_id' => 'required|integer'
        ]);

        $issue = Issue::create([
            'title' => $request->title,
            'description' => $request->description,
            'board_id' => $request->board_id,
            'user_id' => auth()->id()
        ]);

        return response()->json($issue, 201);
    }

    public function update(Request $request, $id)
    {
        $issue = Issue::findOrFail($id);
        $issue->update($request->only(['title','description','status']));
        return response()->json($issue);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate(['status' => 'required|string']);
        $issue = Issue::findOrFail($id);
        $issue->status = $request->status;
        $issue->save();
        return response()->json($issue);
    }
}