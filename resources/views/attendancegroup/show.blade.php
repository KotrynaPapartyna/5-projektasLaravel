
@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Information About AttendanceGroup') }}</div>

                        <div class="card-body">


                            <div class="form-group row">
                                <label for="attendancegroup_id" class="col-sm-3 col-form-label" >{{ __('Attendancegroup ID') }}</label>
                                <div class="col-md-6">
                                    <p>{{$attendancegroup->id}}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="attendancegroup_name" class="col-sm-3 col-form-label" >{{ __('Attendancegroup Name') }}</label>
                                <div class="col-md-6">
                                    <p>{{$attendancegroup->name}}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="attendancegroup_description" class="col-sm-3 col-form-label" >{{ __('Attendancegroup description') }}</label>
                                <div class="col-md-6">
                                    <p>{{$attendancegroup->description}}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="attendancegroup_difficulty" class="col-sm-3 col-form-label" >{{ __('Attendancegroup difficulty') }}</label>
                                <div class="col-md-6">
                                    <p>{{$attendancegroup->difficulty}}</p>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="attendancegroup_school_id" class="col-sm-3 col-form-label" >{{ __('Attendancegroup School ID') }}</label>
                                <div class="col-md-6">
                                <p>{{$attendancegroup->school_id}}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="logo" class="col-sm-3 col-form-label" >{{ __('Attendance Logo') }}</label>
                                <div class="col-md-6">
                                    <img src="{{$attendancegroup->logo}}" alt="{{$attendancegroup->name}}" style="width:200px">
                                </div>
                            </div>

                    <a class="btn btn-info" href="{{route('attendancegroup.index') }}">Back To AttendanceGroups List</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

