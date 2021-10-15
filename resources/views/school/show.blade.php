@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Information About School') }}</div>

                <div class="card-body">


                    <div class="form-group row">
                        <label for="school_id" class="col-sm-3 col-form-label" >{{ __('School ID') }}</label>
                        <div class="col-md-6">
                            <p>{{$school->id}}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="school_name" class="col-sm-3 col-form-label" >{{ __('School Name') }}</label>
                        <div class="col-md-6">
                            <p>{{$school->name}}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="school_description" class="col-sm-3 col-form-label" >{{ __('School description') }}</label>
                        <div class="col-md-6">
                            <p>{{$school->description}}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="school_place" class="col-sm-3 col-form-label" >{{ __('School Place') }}</label>
                        <div class="col-md-6">
                            <p>{{$school->place}}</p>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="school_phone" class="col-sm-3 col-form-label" >{{ __('School Phone') }}</label>
                        <div class="col-md-6">
                            <p>{{$school->phone}}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="logo" class="col-sm-3 col-form-label" >{{ __('School Logo') }}</label>
                        <div class="col-md-6">
                            <img src="{{$school->logo}}" alt="{{$school->name}}" style="width:200px">
                        </div>
                    </div>

                    <a class="btn btn-info" href="{{route('school.index') }}">Back To Schools List</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
