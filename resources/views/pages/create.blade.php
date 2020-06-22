@extends('layouts.main_layout')

@section('content')
<form action="{{ route('store') }}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="name">NAME: </label>
         <input type="text" name="name" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <label for="description">DESCRIPTION: </label>
         <input type="text" name="description" value="{{ old('description') }}">
    </div>
    <div class="form-group">
        <label for="deadline">DEADLINE: </label>
         <input type="date" name="deadline" value="{{ old('deadline') }}">
    </div>
    <div class="form-group">
         <input class="btn btn-primary" type="submit" name="submit" value="Store">
         <a type="button" class="btn btn-warning" href="{{ route('home') }}">Home</a>
    </div>
</form>
@endsection