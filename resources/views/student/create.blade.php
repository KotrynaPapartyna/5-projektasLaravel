
@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Student') }}</div>

                    <div class="card-body">

                        <form method="POST" action="{{route('student.store')}}">


                            <div class="form-group row">
                                <label for="student_name" class="col-sm-3 col-form-label">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                <input id="student_name"type="text" class="form-control" name="student_name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="student_surname" class="col-sm-3 col-form-label" >{{ __('Surname') }}</label>
                                <div class="col-md-6">
                                <input id="student_surname"type="text" class="form-control" name="student_surname">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="student_group_id" class="col-sm-3 col-form-label" >{{ __('Group ID') }}</label>
                                <div class="col-md-6">
                                <input id="student_group_id" type="text" class="form-control" name="student_group_id">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="student_image_url" class="col-sm-3 col-form-label" >{{ __('Image URL') }}</label>
                                <div class="col-md-6">
                                <input id="student_image_url"type="text" class="form-control" name="student_image_url">
                            </div>
                        </div>
                        @csrf

                <button class="btn btn-info" type="submit">Add new Student</button>
    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
