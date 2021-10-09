@extends('layouts.app')

@section('content')


<h1>Edit/Change information about School</h1>

<form method="POST" action="{{route('school.update', [$school])}}">

    Name: <input type="text" name="school_name" value="{{$school->name}}">
    Description: <input type="text" name="school_description" value="{{$school->description}}">
    Place: <input type="text" name="school_place" value="{{$school->place}}">
    Phone: <input type="text" name="school_phone" value="{{$school->phone}}">



@csrf

<button type="submit">Edit</button>
</form>
@endsection
