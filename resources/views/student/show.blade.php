
@extends('layouts.app')

@section('content')

<h1>Information about student</h1>

<div class="container">


        <h2>{{$student->id}}. {{$student->name}} {{$student->surname}}</h2>
        <p>Group id: {{$student->group_id}}</p>
        <img src="{{$student->image_url}}" alt="{{$student->name}}" style="width:auto">


            <!--MANO VARIANTAS
            ID<p>{{$student->id}}</p>
            Name<p>{{$student->name}}</p>
            Surname<p>{{$student->surname}}</p>
            Group ID<p>{{$student->group_id}}</p>
            Image URL<p>{{$student->image_url}}</p>-->

            <a class="btn btn-info" href="{{route('student.index') }}">Back To Students List</a>
</div>

@endsection
