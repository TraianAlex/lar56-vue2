@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">The G-machine
                        <div class="form-check form-inline">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="colorize" @change="customBackground = ! customBackground">
                                <label class="custom-control-label" for="colorize">Change background</label>
                            </div>
                        </div>
                    </div>
                    <div :class="className">
                        <div class="row">
                            <div class="col-sm-6">
                                <gibberish-component></gibberish-component>
                                <list-component></list-component>
                            </div>
                            <div class="col-sm-6">
                                <binding-component></binding-component>
                                @include('gibberish.partials.another-card')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
