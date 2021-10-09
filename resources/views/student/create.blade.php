@extends('layouts.app')

@section('content')

<h2>Create New Students<h2>


<form method="POST" action="{{route('student.store')}}">
    <p>Name: <input type="text" name="student_name"></p>
    <p>Surname: <input type="text" name="student_surname"></p>
    <p>Gropup ID: <input type="text" name="student_group_id"></p>
    <p>Image URL: <input type="text" name="student_image_url"></p>

    @csrf

    <button type="submit">Add new Student</button>
    </form>


    @endsection
