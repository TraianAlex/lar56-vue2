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
                                    Inspiration click
                                </button>
                            </div>
                        </div>
                    </div>

                    <tabs>

                        <tab name="Playground" :selected="true">
                            <div :class="className">
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
                        </tab>

                        <tab name="About us">
                            <div :class="className">
                                <div class="row">
                                    <div class="col-md-12">
                                        <message title="The Guacamole news"
                                                 body="'Yupi ca yey. Lorem ipsum dolor sit amet. Gibber spreads around the world!' - Today,  by me."></message>
                                    </div>
                                </div>
                            </div>
                        </tab>

                        <tab name="Our vision">
                            <div :class="className">
                                <div class="row">
                                    <div class="col-md-12">
                                        <message title="The Guacamole news"
                                                 body="'Yupi ca yey. Lorem ipsum dolor sit amet. Gibber spreads around the world!' - Today,  by me."></message>
                                    </div>
                                </div>
                            </div>
                        </tab>

                    </tabs>

                </div>
            </div>
        </div>
    </div>
    <modal v-show="showModal" @close="showModal = false"><p>Gibberish cannot be forgotten!</p></modal>
@endsection
