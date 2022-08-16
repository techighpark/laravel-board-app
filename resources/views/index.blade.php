@extends('layouts.app')

@section('content')

    <div>
        @include('common.errors')

        @if (count($boards) === 0)
        게시물을 작성해보세요.
        @endif


        <form action="{{ url('board/create') }}" method="GET">
            <div>
                <div>
                    <button>
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
    @if (count($boards) > 0)
        <div>
            <div>
                <h3>Board List</h3>
            </div>

            <div>
                <table>

                    <thead>
                        <th>Title</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($boards as $board)
                        <tr>
                            <td >
                                <div><a href="{{ url('board/'.$board->id) }}">{{ $board->title }}</a></div>
                            </td>

                            <!-- Delete Button -->
                            <td>
                                <form action="{{ url('board/'.$board->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit">
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