@extends('layouts.app')

@section('content')


<h1>Information about School</h1>


<p>{{$school->id}}</p>
<p>{{$school->name}}</p>
<p>{{$school->description}}</p>
<p>{{$school->place}}</p>
<p>{{$school->phone}}</p>

<a class="btn btn-info" href="{{route('school.index') }}">Back To Schools List</a>

@endsection


