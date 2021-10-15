
@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Information About Student') }}</div>

                <div class="card-body">


                    <div class="form-group row">
                        <label for="student_id" class="col-sm-3 col-form-label" >{{ __('Student ID') }}</label>
                        <div class="col-md-6">
                            <p>{{$student->id}}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="student_name" class="col-sm-3 col-form-label" >{{ __('Student Name') }}</label>
                        <div class="col-md-6">
                            <p>{{$student->name}}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="student_surname" class="col-sm-3 col-form-label" >{{ __('Student surname') }}</label>
                        <div class="col-md-6">
                            <p>{{$student->surname}}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="group_id" class="col-sm-3 col-form-label" >{{ __('Group ID') }}</label>
                        <div class="col-md-6">
                            <p>{{$student->group_id}}</p>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image_url" class="col-sm-3 col-form-label" >{{ __('Student Photo') }}</label>
                        <div class="col-md-6">
                            <img src="{{$student->image_url}}" alt="{{$student->name}}" style="width:200px">
                        </div>
                    </div>



                    <a class="btn btn-info" href="{{route('student.index') }}">Back To Students List</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
