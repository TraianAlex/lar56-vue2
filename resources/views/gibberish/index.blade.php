@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">The G-machine
                        <div class="form-check form-inline">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="colorize"
                                       @change="customBackground = ! customBackground">
                                <label class="custom-control-label" for="colorize">Change background</label>
                            </div>
                            <div class="custom-control">
                                <button class="btn btn-warning" @click="showModal = true">
                                    Show Modal
                                </button>
                            </div>
                        </div>
                    </div>
                    <div :class="className">
                        <div class="row">
                            <div class="col-md-12">
                                <message title="Bulma message"
                                         body="Yupi ca yey. Lorem ipsum dolor sit amet."></message>
                                <message title="Hello universe!" body="ALALALALALALAL HUE HUE HUE"></message>
                                <message title="Hello universe!" body='blah vlah lbah'></message>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <gibberish-component></gibberish-component>
                                <task-list></task-list>
                            </div>
                            <div class="col-sm-6">
                                <binding-component></binding-component>
                                <computing-component></computing-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <modal content="Giberrish cannot be forgotten." v-show="showModal" @close="showModal = false"></modal>
@endsection
