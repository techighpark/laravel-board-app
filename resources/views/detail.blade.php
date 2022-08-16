@extends('layouts.app')

@section('content')
    <!-- Create Task Form... -->

    <div class="mt-10">
        <div class="mb-4">
            <div class="font-extrabold">Title</div>
            <div>{{$board->title}}</div>
        </div>
        <div class="flex gap-x-1 items-center">
        <button type="submit" class="border h-6 w-12 rounded-2xl px-1 text-[12px] text-orange-500">
                <a href="{{ url('board/edit/'.$board->id)}}">Edit</a>
            </button>
            <form action="{{ url('board/delete/'.$board->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="border h-6 w-12 rounded-2xl px-1 text-[12px] text-orange-500">
                    Delete
                </button>
            </form>
        </div>
        <div class="text-[12px] mt-4">
            <div>
                <span>Created At : {{$board->created_at}} </span>
            </div>
            <div>
                <span>Updated At :  {{$board->updated_at}}</span>
            </div>
        </div>
        <div class="mt-5">
            <h3 class="font-extrabold">Content</h3>
            {{$board->contents}}
        </div>
    </div>
@endsection