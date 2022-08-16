@extends('layouts.app')

@section('content')
    <!-- Create Task Form... -->

    <div >
        <div>
            <h2>Title : {{$board->title}}</h2>
        </div>
        <form action="{{ url('board/delete/'.$board->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit">
                Delete
            </button>
        </form>
            <button type="submit">
            <a href="{{ url('board/edit/'.$board->id)}}">Edit</a>
            </button>
        <div>
            <span>Created At : {{$board->created_at}} </span>

        </div>
        <div>
            <span>Updated At :  {{$board->updated_at}}</span>
        </div>
        <div>
            <h3>Content</h3>
            {{$board->contents}}
        </div>
    </div>
@endsection