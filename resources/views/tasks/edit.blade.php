@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Task Create</h5>
            </div>
            <div class="card-body">
                <form action="{{route('tasks.update', $task->id)}}" class="form" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="title">Task Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Please type title here"
                               value="{{$task->title}}"/>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="completed">Completed</label>
                        <select name="completed" id="completed" class="form-control">
                            <option value="1" {{$task->completed ? 'selected' : '' }}>Completed</option>
                            <option value="0" {{!$task->completed ? 'selected' : ''}}>Not Completed</option>
                        </select>
                    </div>
                    <input type="submit" value="Save" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection