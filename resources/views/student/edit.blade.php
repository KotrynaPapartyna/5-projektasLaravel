
@extends('layouts.app')

@section('content')

<h1>Edit/Change information about Student</h1>

<form method="POST" action="{{route('student.update', [$student])}}">

    Name: <input type="text" name="student_name" value="{{$student->name}}">
    Surname: <input type="text" name="student_surname" value="{{$student->surname}}">
    Group_id: <input type="text" name="student_group_id" value="{{$student->group_id}}">
    Image_url: <input type="text" name="student_image_url" value="{{$student->image_url}}">


@csrf

<button type="submit">Edit</button>
</form>

@endsection
