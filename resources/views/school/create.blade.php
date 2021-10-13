@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create School') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{route('school.store')}}">

                        <div class="form-group row">
                            <label for="school_name" class="col-sm-3 col-form-label" >{{ __('School Name') }}</label>
                            <div class="col-md-6">
                            <input id="school_name"type="text" class="form-control" name="school_name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school_description" class="col-sm-3 col-form-label" >{{ __('School Description') }}</label>
                            <div class="col-md-6">
                            <input id="school_description"type="text" class="form-control" name="school_description" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school_place" class="col-sm-3 col-form-label" >{{ __('Scool Place') }}</label>
                            <div class="col-md-6">
                            <input id="school_place"type="text" class="form-control" name="school_place" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school_phone" class="col-sm-3 col-form-label" >{{ __('School Phone') }}</label>
                            <div class="col-md-6">
                            <input id="school_phone"type="text" class="form-control" name="school_phone" required autofocus>
                            </div>
                        </div>

                        <button class="btn btn-info" type="submit">Save new School</button>

                        @csrf


                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

