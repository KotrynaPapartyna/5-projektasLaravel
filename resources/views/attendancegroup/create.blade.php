@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create AttendanceGroup') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{route('attendancegroup.store')}}">

                        <div class="form-group row">
                            <label for="attendancegroup_name" class="col-sm-3 col-form-label" >{{ __('Attendancegroup Name') }}</label>
                            <div class="col-md-6">
                            <input id="attendancegroup_name"type="text" class="form-control" name="attendancegroup_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="attendancegroup_description" class="col-sm-3 col-form-label" >{{ __('Attendancegroup Description') }}</label>
                            <div class="col-md-6">
                            <input id="attendancegroup_description"type="text" class="form-control" name="attendancegroup_description">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="attendancegroup_difficulty" class="col-sm-3 col-form-label" >{{ __('Attendancegroup Difficulty') }}</label>
                            <div class="col-md-6">
                            <input id="attendancegroup_difficulty"type="text" class="form-control" name="attendancegroup_difficulty">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="attendancegroup_school_id" class="col-sm-3 col-form-label" >{{ __('Attendancegroup School ID') }}</label>
                            <div class="col-md-6">
                            <input id="attendancegroup_school_id"type="text" class="form-control" name="attendancegroup_school_id">
                            </div>
                        </div>

                        <button class="btn btn-info" type="submit">Save new AttendanceGroup</button>

                        @csrf


                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
