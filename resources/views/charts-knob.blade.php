@extends('layouts.master-layouts')
@section('title') @lang('translation.Jquery_Knob') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Charts @endslot
        @slot('title') Jquery Knob @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Examples</h4>
                    <p class="card-title-desc">Nice, downward compatible, touchable, jQuery dial</p>

                    <div class="row">
                        <div class="col-xl-4 col-sm-6">
                            <div class="text-center" dir="ltr">
                                <h5 class="font-size-14 mb-3">Disable display input</h5>
                                <input class="knob" data-width="150" data-fgcolor="#2a4fd7" data-displayinput="false"
                                    value="35">
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="text-center" dir="ltr">
                                <h5 class="font-size-14 mb-3">Cursor mode</h5>
                                <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#34c38f" value="29">
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="text-center" dir="ltr">
                                <h5 class="font-size-14 mb-3">Display previous value</h5>
                                <input class="knob" data-width="150" data-min="-100" data-fgcolor="#35d1df"
                                    data-displayprevious="true" value="44">
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="text-center" dir="ltr">
                                <h5 class="font-size-14 mb-3">Angle offset</h5>
                                <input class="knob" data-width="150" data-angleoffset="90" data-linecap="round"
                                    data-fgcolor="#fa7f56" value="35">
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="text-center" dir="ltr">
                                <h5 class="font-size-14 mb-3"> 5-digit values, step 1000</h5>
                                <input class="knob" data-width="150" data-min="-15000" data-displayprevious="true"
                                    data-max="15000" data-step="1000" value="-11000" data-fgcolor="#6f42c1">
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="text-center" dir="ltr">
                                <h5 class="font-size-14 mb-3">Angle offset and arc</h5>
                                <input class="knob" data-width="150" data-cursor="true" data-fgcolor="#e4a73e" value="29">
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="text-center" dir="ltr">
                                <h5 class="font-size-14 mb-3">Readonly</h5>
                                <input class="knob" data-width="150" data-height="150" data-linecap=round
                                    data-fgColor="#fa3452" value="80" data-skin="tron" data-angleOffset="180"
                                    data-readOnly=true data-thickness=".1" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="text-center" dir="ltr">
                                <h5 class="font-size-14 mb-3"> Angle offset and arc</h5>
                                <input class="knob" data-width="150" data-height="150" data-displayPrevious=true
                                    data-fgColor="#495057" data-skin="tron" data-cursor=true value="75" data-thickness=".2"
                                    data-angleOffset=-125 data-angleArc=250 value="44" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')
    <!-- jquery-knob -->
    <script src="{{ URL::asset('/assets/libs/jquery-knob/jquery-knob.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/jquery-knob.init.js') }}"></script>
@endsection
