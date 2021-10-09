@extends('layouts.app')

@section('content')

<h1>Edit/Change information about AttendanceGroup</h1>

<form method="POST" action="{{route('attendancegroup.update', [$attendancegroup])}}">

    Name: <input type="text" name="attendancegroup_name" value="{{$attendancegroup->name}}">
    Description: <input type="text" name="attendancegroup_description" value="{{$attendancegroup->description}}">
    Difficulty: <input type="text" name="attendancegroup_difficulty" value="{{$attendancegroup->difficulty}}">
    School ID: <input type="text" name="attendancegroup_school_id" value="{{$attendancegroup->school_id}}">

@csrf

<button type="submit">Edit</button>
</form>

@endsection


