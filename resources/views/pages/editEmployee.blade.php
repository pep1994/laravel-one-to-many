@extends('layouts.main_layout')

@section('content')
    @if ($errors -> any())
        @foreach ($errors -> all() as $error)
            <p class="text-danger">{{ $error }}</p>
        @endforeach
    @endif
    <form action="{{ route('update_employee', $employee['id']) }}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="name">FIRSTNAME: </label>
            <input type="text" name="firstname" value="{{ $employee['firstname'] }}">
        </div>
        <div class="form-group">
            <label for="description">LASTNAME: </label>
            <input type="text" name="lastname" value="{{ $employee['lastname'] }}">
        </div>
        <div class="form-group">
            <label for="deadline">DATE of BIRTH: </label>
            <input type="date" name="dateOfBirth" value="{{ $employee['dateOfBirth'] }}">
        </div>
        <div class="form-group">
            <label for="deadline">ROLE: </label>
            <input type="text" name="role" value="{{ $employee['role'] }}">
        </div>
        <div class="form-group">
            <label for="locations[]">Locations: </label> <br>
            @foreach ($locations as $location)
                <input type="checkbox" name="locations[]" value="{{ $location -> id}}"
                @foreach ($employee -> locations as $locEmployee)
                    @if ($location -> id == $locEmployee -> id)
                        checked
                    @endif
                @endforeach
                > {{ $location -> street }} - {{ $location -> city}} - {{ $location -> state }} <br>
            @endforeach
        </div>
        
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="Update">
            <a type="button" class="btn btn-warning" href="{{ route('home') }}">Home</a>
        </div>
    </form>
@endsection