@extends('layouts.main_layout')

@section('content')
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('success') }}</strong>
        </div>  
    @endif
    <div class="d-flex justify-content-between">
        <strong><a href="{{ route('create') }}">NEW TASK</a> </strong>
        <strong><a href="{{ route('employee') }}">ALL EMPLOYEES</a> </strong>
    </div>
    <ul>
        @foreach ($tasks as $task)
            <li>
                Name: <a href="{{ route('show', $task['id']) }}">{{ $task -> name }}</a> <br>
            </li>
        @endforeach
    </ul>
@endsection