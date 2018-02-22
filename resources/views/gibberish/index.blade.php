@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @include('gibberish.partials.header')
                    <tabs>
                        <tab name="Playground" :selected="true">
                            @include('gibberish.partials.playground')
                        </tab>
                        <tab name="The Gibber News">
                           @include('gibberish.partials.news')
                        </tab>
                        <tab name="Coupon">
                           @include('gibberish.partials.coupon')
                        </tab>
                    </tabs>

                </div>
            </div>
        </div>
    </div>
    {{-- Modal does not have a specific place in html, becasue it displays as a 'layer' over some basic layout --}}
    <modal v-show="showModal" @close="showModal = false">
        <template slot="header">Named slot lol xd</template>
        Default slot
    </modal>
@endsection
