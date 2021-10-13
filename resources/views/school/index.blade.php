@extends('layouts.app')

@section('content')

<h1>Schools</h1>

<form method="GET" action="{{route('school.create') }}">

    @csrf
    <button class="btn btn-success" type="submit">Create</button>
</form>


<div class="container">
    <table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Place</th>
        <th>Phone</th>
        <th>Action</th>

    </tr>


    @foreach ($schools as $school)
        <tr>
            <td>{{ $school->id }}</td>

            <td><a href="{{route('school.show', [$school]) }}"> {{$school->name }}</a></td>
            <td>{{ $school->description }}</td>
            <td>{{ $school->place }}</td>
            <td>{{ $school->phone }}</td>

            <td>

                <a class="btn btn-warning" href="{{route('school.show', [$school]) }}">Show</a>
                <a class="btn btn-info" href="{{route('school.edit', [$school]) }}">Edit</a>

                <form method="POST" action="{{route('school.destroy', [$school]) }}">

                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>

            </td>
        </tr>
    @endforeach

</table>
</div>
@endsection
