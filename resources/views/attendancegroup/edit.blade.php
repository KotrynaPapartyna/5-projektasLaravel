@extends('layouts.app')

@section("content")

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Attendance group') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('attendancegroup.update', [$attendancegroup]) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="attendancegroup_name" class="col-md-4 col-form-label text-md-right">{{ __('Attendancegroup name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="attendancegroup_name" value="{{$attendancegroup->name}}" required autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="attendancegroup_description" class="col-md-4 col-form-label text-md-right">{{ __('Attendancegroup description') }}</label>
                            <div class="col-md-6">
                                {{--<input id="description" type="text" class="form-control" name="attendancegroup_description" value="{{$attendancegroup->description}}" required>--}}
                                <textarea class="summernote" name="attendancegroup_description">
                                    {{$attendancegroup->description}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="attendancegroup_difficulty" class="col-md-4 col-form-label text-md-right">{{ __('Attendancegroup difficulty') }}</label>
                            <div class="col-md-6">
                                <input id="difficulty" type="text" class="form-control" name="attendancegroup_difficulty" value="{{$attendancegroup->difficulty}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="attendancegroup_school_id" class="col-md-4 col-form-label text-md-right">{{ __('Group ID') }}</label>
                            <div class="col-md-6">
                                <input id="school_id" type="text" class="form-control" name="attendancegroup_school_id" value="{{$attendancegroup->school_id}}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="attendancegroup_logo" class="col-md-4 col-form-label text-md-right">{{ __('Attendancegroup logo') }}</label>

                            <div class="col-md-6">
                                <input id="logo" type="file" class="form-control" name="attendancegroup_logo">
                            </div>

                            <img src="{{$attendancegroup->logo}}" alt='{{$attendancegroup->name}}' />
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('SAVE') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>

@endsection


