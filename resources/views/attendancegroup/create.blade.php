@extends('layouts.app')

@section('content')

<h2>Create New AttendanceGroup<h2>

<form method="POST" action="{{route('attendancegroup.store')}}">
    <p>Name: <input type="text" name="attendancegroup_name"></p>
    <p>Description: <input type="text" name="attendancegroup_description"></p>
    <p>Difficulty: <input type="text" name="attendancegroup_difficulty"></p>
    <p>School ID: <input type="text" name="attendancegroup_school_id"></p>

    @csrf

    <button type="submit">Add new AttendanceGroup</button>
    </form>

    @endsection
