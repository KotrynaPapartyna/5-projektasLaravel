@extends('layouts.app')

@section('content')

<h1>Attendancegroup</h1>

<form method="GET" action="{{route('attendancegroup.create') }}">

    @csrf
    <button class="btn btn-success" type="submit">Create</button>
</form>


<div class="container">
    <table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Dscription</th>
        <th>Difficulty</th>
        <th>School ID</th>
        <th>Action</th>

    </tr>

    @foreach ($attendancegroups as $attendancegroup)
        <tr>
            <td>{{ $attendancegroup->id }}</td>
            <td><a href="{{route('attendancegroup.show', [$attendancegroup]) }}"> {{$attendancegroup->name }}</a></td>
            <td>{{ $attendancegroup->description}}</td>
            <td>{{ $attendancegroup->difficulty}}</td>
            <td>{{ $attendancegroup->school_id}}</td>

            <td>
                <a class="btn btn-warning" href="{{route('attendancegroup.show', [$attendancegroup]) }}">Show</a>
                <a class="btn btn-info" href="{{route('attendancegroup.edit', [$attendancegroup]) }}">Edit</a>

                <form method="POST" action="{{route('attendancegroup.destroy', [$attendancegroup]) }}">

                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>

            </td>
        </tr>
    @endforeach

</table>
</div>
@endsection
