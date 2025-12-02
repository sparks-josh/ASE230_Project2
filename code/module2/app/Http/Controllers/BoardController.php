<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{public function index()
    {return Board::all();}
    public function show($id)
    {return Board::findOrFail($id);}
    public function store(Request $request)
    {$request->validate([
            'name' => 'required|string'
        ]);

        $board = Board::create([
            'name' => $request->name,
            'user_id' => auth()->id()
        ]);

        return response()->json($board, 201);}
}