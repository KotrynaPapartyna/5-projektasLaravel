@extends('layouts.app')

@section('content')

<h1>Students</h1>

<form method="GET" action="{{route('student.create') }}">

    @csrf
    <button class="btn btn-success" type="submit">Create</button>
</form>

<div class="container">
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Group ID</th>
        <th>Action</th>

    </tr>

    @foreach ($students as $student)

        <tr>
            <td>{{ $student->id }}</td>
            <td><a href="{{route('student.show', [$student]) }}"> {{$student->name }}</a></td>
            <td>{{ $student->surname }}</td>
            <td>{{ $student->group_id }}</td>


            <td>
                <a class="btn btn-warning" href="{{route('student.show', [$student]) }}">Show</a>
                <a class="btn btn-info" href="{{route('student.edit', [$student]) }}">Edit</a>


                <form method="POST" action="{{route('student.destroy', [$student]) }}">

                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>
</div>
@endsection

