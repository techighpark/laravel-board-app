<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Repositories\BoardRepository;


class BoardController extends Controller
{


    public function index()
{   
    $boards = Board::orderBy('created_at', 'asc')->get();
    return view('index', [
        'boards' => $boards
    ]);
}
     /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $board = Board::findOrFail($id);

        return view('detail', compact('board'));
    }

    public function create()
    {
        return view('create');
    }

public function store(Request $request)
  {   
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
    ]);
    $validator = Validator::make($request->all(), [
        'title' => 'required|min:3|max:1000',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $board = new Board;
    $board->title = $request->title;
    $board->contents = $request->contents;
    $board->save();

    return redirect('/');
}
public function delete(Board $board){
    $board->delete();
    return redirect('/');
}


public function edit($id)
{
    $board = Board::findOrFail($id);

    return view('edit', compact('board'));
}
public function editProcess(Request $request, $id)
{
    $board = Board::findOrFail($id);
    $board->title = $request->title;
    $board->contents = $request->contents;
    $board->save();

    return view('detail', compact('board'));
}


}