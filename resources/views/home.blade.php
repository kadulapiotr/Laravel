@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="/tasks/create" class="btn btn-primary">Create Task</a>
                    <h1>Your Tasks</h1>
                    @if(count($tasks) > 0)
                    @foreach($tasks as $task)
                    <div class="jumbotron">
                        <form action="{{ route('tasks.destroy', $task->id)}}" method="post">
                            <h3>{{$task->title}}</h3>
                            <small>{{$task->description}}</small>
                            <a href="/tasks/{{$task->id}}/edit" class="btn btn-primary" style="float:right">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mr-1" type="submit" style="float:right">Delete</button>
                        </form>
                    </div>

                    @endforeach
                    @else
                    <p>No tasks found</p>
                    @endif
@endsection