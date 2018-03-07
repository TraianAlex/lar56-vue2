@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @include('gibberish.partials.header')
                    <tabs>
                        <tab name="First Steps">
                            @include('gibberish.partials.playground')
                        </tab>
                        <tab name="Messeges">
                            @include('gibberish.partials.news')
                        </tab>
                        <tab name="Event firing">
                            @include('gibberish.partials.coupon')
                        </tab>

                        <tab name="Dunamic binding">
                            @include('gibberish.partials.progress')
                        </tab>

                        <tab name="Axios">
                            @include('gibberish.partials.axios')
                        </tab>

                        <tab name="Shared state">
                            @include('gibberish.partials.shared')
                        </tab>

                        <tab name="Custom input">
                            @include('gibberish.partials.custom')
                        </tab>
                        <tab name="Scoped slots" selected="true">
                            @include('gibberish.partials.scoped')
                        </tab>
                    </tabs>

                </div>
            </div>
        </div>
    </div>
    {{-- Modal does not have a specific place in html, becasue it displays as a 'layer' over some basic layout --}}
    <modal v-show="showModal" @close="showModal = false">
        <template slot="header">Named slot lol xd</template>
        Experimentum una ducunt ad albus ausus.Pius poetas ducunt ad palus.Messis recte ducunt ad lotus
        fraticinida.Flavor the cracker crumps with juicy butterscotch, black cardamon, szechuan pepper, and za'atar
        making sure to cover all of it.Scallywags wave with malaria at the weird madagascar!
        <template slot="footer">
            <button class="button is-success">Save changes</button>
            <button class="button">Cancel</button>
        </template>
    </modal>
@endsection
