@extends('layouts.main_layout')


@section('content')
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('success') }}</strong>
        </div>
    @endif
    <h1>{{ $task -> name }}</h1>
    Descrizione: <p>{{ $task -> description }}</p>
    Employee: <small>{{ $task -> employee_id }}</small> <br>
    Deadline: {{ $task -> deadline }} <br>
    <a type="button" class="btn btn-success" href="{{ route('edit', $task['id']) }}">Edit</a>
    <a type="button" class="btn btn-danger" href="{{ route('delete', $task['id']) }}">Delete</a>
    <a type="button" class="btn btn-primary" href="{{ route('home') }}">Home</a>
@endsection