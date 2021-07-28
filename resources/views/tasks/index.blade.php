@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Task Title</th>
                    <th>Completed</th>
                    <th>Created On</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $index => $task)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$task->title}}</td>
                        <td>{{$task->completed ? 'Completed' : 'Not Completed'}}</td>
                        <td>{{$task->created_at->format('d M Y h:i a')}}</td>
                        <td>
                            {{--Edit button--}}
                            <a href="{{route('tasks.edit', $task->id)}}" class="btn btn-info btn-sm">Edit Task</a>
                            {{--Delete--}}
                            <form action="{{route('tasks.delete', $task->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete Task" class="btn btn-danger btn-sm mt-2">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection