@extends('layouts.app')

@section('content')

<h2>Create New  School<h2>

<form method="POST" action="{{route('school.store')}}">
    <p>Name: <input type="text" name="school_name"></p>
    <p>Description: <input type="text" name="school_description"></p>
    <p>Place: <input type="text" name="school_place"></p>
    <p>Phone: <input type="text" name="school_phone"></p>



    @csrf

    <button class="btn btn-info" type="submit">Add new School</button>
    </form>

    @endsection
