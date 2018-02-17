@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Heading</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                It is a gibberish. But it's in vue!
                                <span class="badge badge-primary badge-pill">Vue</span>
                            </li>
                        </ul>
                    </div>
                    <gibberish></gibberish>
                </div>
            </div>
        </div>
    </div>
@endsection
