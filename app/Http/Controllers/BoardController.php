<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Author;

class BoardController extends Controller
{
 /**
 * Display a list of all of the user's task.
 *
 * @param  Request  $request
 * @return Response
 */
public function index(Request $request)
{
    return view('boards.index');
}
}