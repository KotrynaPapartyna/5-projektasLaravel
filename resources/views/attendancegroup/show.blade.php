
@extends('layouts.app')

@section('content')

<h1>Information about AttendanceGroup</h1>

<p>{{$attendancegroup->id}}</p>
<p>{{$attendancegroup->name}}</p>
<p>{{$attendancegroup->description}}</p>
<p>{{$attendancegroup->difficulty}}</p>
<p>{{$attendancegroup->school_id}}</p>



@endsection
