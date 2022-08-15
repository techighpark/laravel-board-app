<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Board;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $boards = Board::orderBy('created_at', 'asc')->get();
    return view('boards', [
        'boards' => $boards
    ]);
});


Route::post('/board', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $board = new Board;
    $board->name = $request->name;
    $board->save();

    return redirect('/');
});

Route::delete('/board/{board}', function (Board $board) {
    $board->delete();
    return redirect('/');
});