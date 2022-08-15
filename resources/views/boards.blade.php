@extends('layouts.app')

@section('content')
    <!-- Create Task Form... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="{{ url('board') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Content</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- Current Tasks -->
    @if (count($boards) > 0)
        <div>
            <div>
                Laravel - Board
            </div>

            <div>
                <table>

                    <!-- Table Headings -->
                    <thead>
                        <th>List</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($boards as $board)
                        <tr>
                            <!-- Task Name -->
                            <td >
                                <div>{{ $board->name }}</div>
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