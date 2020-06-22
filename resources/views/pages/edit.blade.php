@extends('layouts.main_layout')

@section('content')

    

    <form action="{{ route('update', $task['id']) }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="name">NAME: </label>
             <input type="text" name="name" value="{{ $task['name'] }}">
        </div>
        <div class="form-group">
            <label for="description">DESCRIPTION: </label>
             <input type="text" name="description" value="{{ $task['description'] }}">
        </div>
        <div class="form-group">
            <label for="deadline">DEADLINE: </label>
             <input type="date" name="deadline" value="{{ $task['deadline'] }}">
        </div>
        <div class="form-group">
             <input class="btn btn-primary" type="submit" name="submit" value="Update">
        </div>
    </form>
    
@endsection