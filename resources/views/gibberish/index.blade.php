@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">The G-machine</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <gibberish-component></gibberish-component>
                                <list-component></list-component>
                            </div>
                            <div class="col-sm-6">
                                <binding-component></binding-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
