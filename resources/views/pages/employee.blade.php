@extends('layouts.main_layout')

@section('content')
    <h2>Employees</h2>

    <ul>
        @foreach ($employees as $employee)
            <li class="mb-5">
                <h3>{{ $employee -> firstname }} {{ $employee -> lastname }}</h3>
                
                <h5>Location: </h5>
                <ul>
                    @foreach ($employee -> locations as $location)
                        <li>
                            {{ $location -> street }} - {{ $location ->  city}} - {{ $location -> state }}
                        </li>
                    @endforeach
                </ul> <br>
                <h5>Tasks: </h5>
                <ul>
                    @foreach ($employee -> tasks as $task)
                        <li>
                            <h6>{{ $task -> name}}</h6>
                            <p>{{ $task -> description}}</p>
                            <p>{{ $task -> deadline}}</p>           
                        </li>
                    @endforeach
                </ul>
                <a type="button" class="btn btn-success" href="{{ route('edit_employee', $employee['id']) }}">Edit</a>
                <a type="button" class="btn btn-danger" href="{{ route('delete_employee', $employee['id']) }}">Delete</a>
            </li>
        @endforeach
    </ul>
@endsection