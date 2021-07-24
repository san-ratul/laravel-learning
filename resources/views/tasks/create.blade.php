@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Task Create</h5>
            </div>
            <div class="card-body">
                <form action="{{route('tasks.store')}}" class="form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Task Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Please type title here"/>
                    </div>
                    <input type="submit" value="Save" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection