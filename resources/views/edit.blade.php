@extends('layouts.app')

@section('content')

    <div >
    @include('common.errors')
    <form action="{{ url('board/editProcess/'.$board->id) }}" method="POST">
            {{ csrf_field() }}

            <div >
                <div>
                    <h2><label for="task" >Title : <input type="text" name="title" value="{{$board->title}}"></label></h2>
                </div>
                <div>
                    <h3><label for="contents">Content</label></h3>
                    <textarea rows="20" cols="50" name="contents">{{$board->contents}}</textarea>
                </div>
            </div>

            <div>
                <div>
                    <button type="submit">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection