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
                </ul>
            </li>
        @endforeach
    </ul>
@endsection