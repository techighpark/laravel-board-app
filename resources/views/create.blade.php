@extends('layouts.app')

@section('content')
    <div>
        @include('common.errors')

        <form action="{{ url('board/create') }}" method="POST">
            {{ csrf_field() }}

            <div >
                <label for="task" >Title</label>
                <div>
                    <input type="text" name="title">
                </div>
                <label for="contents">Content</label>
                <div>
                    <textarea rows="20" cols="50" name="contents"></textarea>
                </div>
            </div>

            <div>
                <div>
                    <button type="submit">
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
    
@endsection