@extends('layouts.app')

@section('content')
<h1>Edit Task</h1>
<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @method('PATCH')
    @csrf        
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control col-sm-4" name="title" value="{{$task->title}}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control col-sm-4" name="description" value="{{$task->description}}">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection

