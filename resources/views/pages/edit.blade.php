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
            <label for="employee_id">EMPLOYEE</label>
            <select name="employee_id">
                @foreach ($employees as $employee)
                    <option value="{{ $employee['id'] }}"
                    @if ($employee['id'] == $task['employee_id'])
                        selected
                    @endif
                    >{{ $employee['firstname'] }} {{ $employee['lastname'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
             <input class="btn btn-primary" type="submit" name="submit" value="Update">
             <a type="button" class="btn btn-warning" href="{{ route('home') }}">Home</a>
        </div>
    </form>
    
@endsection