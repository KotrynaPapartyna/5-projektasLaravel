@extends('layouts.app')

@section('content')

<h1>Students</h1>


<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Group ID</th>
        <th>Image URL</th>
    </tr>

    @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>


            <td><a href="{{route('student.show', [$student]) }}"> {{$student->name }}</a></td>
            <td>{{ $student->surname }}</td>
            <td>{{ $student->group_id }}</td>
            <td>{{ $student->image_url }}</td>

            <td>

                <a href="{{route('student.edit', [$student]) }}">Edit</a>


                <form method="POST" action="{{route('student.destroy', [$student]) }}">

                    @csrf
                    <button type="submit">Delete</button>
                </form>

            </td>
        </tr>
    @endforeach

</table>

@endsection
