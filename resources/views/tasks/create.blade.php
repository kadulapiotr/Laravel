@extends('layouts.app')

@section('content')
<h1>Create Task</h1>
<form action="{{ route('tasks.store') }}" method="POST">
   @csrf        
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control col-sm-4" type="text" name="title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input class="form-control col-sm-4" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

