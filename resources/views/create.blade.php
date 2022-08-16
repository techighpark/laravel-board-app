@extends('layouts.app')

@section('content')
    <div class="mt-10">
        @include('common.errors')

        <form action="{{ url('board/create') }}" method="POST">
            {{ csrf_field() }}

            <div >
                <div class="mb-4 flex flex-col">
                    <label for="task" class="font-extrabold">Title</label>
                    <input type="text" name="title" class="border rounded-2xl pl-3 w-32">
                </div>
                <div>
                    <h3><label for="contents">Content</label></h3>
                    <textarea rows="20" cols="50" name="contents" class="border rounded-2xl p-4"></textarea>
                </div>
            </div>

            <div>
                <div>
                    <button type="submit" class="border h-6 w-12 rounded-2xl px-1 text-[12px] text-orange-500">
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
    
@endsection
