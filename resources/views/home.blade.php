@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">

                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5 class="card-title">You are logged in!</h5>
                        <a href="{{ route('gibberish') }}" class="btn btn-primary">Go gibber somewhere!</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
