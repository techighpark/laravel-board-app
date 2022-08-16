@extends('layouts.app')

@section('content')

    <div class="mt-10">
        @include('common.errors')

        @if (count($boards) === 0)
        게시물을 작성해보세요.
        @endif


                <div class="mb-5">
                    <a href="{{ url('board/create') }}" class="p-1  text-sm w-20 flex justify-center font-bold  rounded-2xl text-white bg-orange-500 hover:bg-white hover:text-orange-500 hover hover:border-2 hover:border-orange-500 ">
                       <span>Create</span>
                    </a>
                </div>

    </div>
    @if (count($boards) > 0)
        <div>
            <div>
                <div class="font-extrabold">Board List</div>
            </div>

            <div>
                <table>

                    <thead>
                        <th class="font-semibold text-start">Title</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($boards as $board)
                        <tr>
                            <td >
                                <div class="mr-5"><a href="{{ url('board/'.$board->id) }}" class="cursor-pointer flex gap-x-1">{{ $board->title }}<svg xmlns="http://www.w3.org/2000/svg" width="15" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 0C114.6 0 0 114.6 0 256c0 141.4 114.6 256 256 256s256-114.6 256-256C512 114.6 397.4 0 256 0zM406.6 278.6l-103.1 103.1c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25L306.8 288H128C110.3 288 96 273.7 96 256s14.31-32 32-32h178.8l-49.38-49.38c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l103.1 103.1C414.6 241.3 416 251.1 416 256C416 260.9 414.6 270.7 406.6 278.6z"/></svg></a></div>
                            </td>

                            <!-- Delete Button -->
                            <td>
                                <form action="{{ url('board/'.$board->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="border rounded-2xl px-1 text-[10px] text-orange-500">
                                    Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection