
@extends('layouts.app')

@section('content')

<h1>Information about AttendanceGroup</h1>

<p>{{$attendancegroup->id}}</p>
<p>{{$attendancegroup->name}}</p>
<p>{{$attendancegroup->description}}</p>
<p>{{$attendancegroup->difficulty}}</p>
<p>{{$attendancegroup->school_id}}</p>

<a class="btn btn-info" href="{{route('attendancegroup.index') }}">Back To AttendanceGroups List</a>

@endsection
