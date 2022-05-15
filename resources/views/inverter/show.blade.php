@extends('layouts.app')

@section('content')
<style>
    @media (max-width: 1199px) {
    .container {
        max-width: 100% !important;
        font-size: 12px !important;
    }
}
</style>
    <div class="container text-center" style="">
        <div class="ammar-col row bg-dark text-light">
            <div class="col-lg-12 col-xl-12 py-3">InverterName & Sn:44588664532435</div>
        </div>
        <div class="row bg-dark text-light" style="font-size: 11px">
            <div class="col-lg-2 col-xl-2 border border-start-0" style="display: grid;">
                <div class="row">
                    <div class="col-lg-5 col-xl-5">grid <br> voltage</div>
                    <div class="col-lg-7 col-xl-7 border-start">grid <br> frequency</div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4 border">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="row text-center">
                            <div class="col-lg-10 col-xl-9">ac output</div>
                            <div class="col-lg-2 col-xl-3 border-start">output</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-xl-2 border-top">voltage</div>
                            <div class="col-lg-3 col-xl-3 border-top border-start">requency</div>
                            <div class="col-lg-5 col-xl-4 border-top">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-6 border-start">power</div>
                                    <div class="col-lg-6 col-xl-6 border-start">active</div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-xl-3 border-start">load</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 border">
                <div class="row">
                    <div class="col-lg-3 col-xl-3">bus <br> voltage</div>
                    <div class="col-lg-3 col-xl-3 border-start">battery <br> voltage</div>
                    <div class="col-lg-3 col-xl-3 border-start">battery <br> charging</div>
                    <div class="col-lg-3 col-xl-3 border-start">inverter <br> temp</div>
                </div>
            </div>
            <div class="col-lg-3 col-xl-3 border border-end-0">
                <div class="row">
                    <div class="col-lg-3 col-xl-3">rssi</div>
                    <div class="col-lg-3 col-xl-2 border-start">com <br> stat</div>
                    <div class="col-lg-6 col-xl-7 border-start">created <br> at</div>
                </div>
            </div>
        </div>
        @foreach ($de as $dei)
            <div class="row">
                <div class="col-lg-2 col-xl-2 border d-grid">
                    <div class="row">
                        <div class="col-lg-5 col-xl-5 border-start">{{ $dei->grid_voltage }}<span class="d-xl-none"><br></span>V</div>
                        <div class="col-lg-7 col-xl-7 border-start">{{ $dei->grid_frequency }}<span class="d-xl-none"><br></span>Hz</div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 border d-grid">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12 d-grid">
                            <div class="row">
                                <div class="col-lg-2 col-xl-2 ">{{ $dei->ac_output_voltage }}<span class="d-xl-none"><br></span>V</div>
                                <div class="col-lg-3 col-xl-3 border-start">{{ $dei->ac_output_frequency }}<span class="d-xl-none"><br></span>Hz</div>
                                <div class="col-lg-5 col-xl-4 d-grid">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6 border-start">{{ $dei->ac_output_apparent_power }}<span class="d-xl-none"><br></span>VA</div>
                                        <div class="col-lg-6 col-xl-6 border-start">{{ $dei->ac_output_apparent_active }}<span class="d-xl-none"><br></span>W</div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-xl-3 border-start">{{ $dei->output_load_percent }}<span class="d-xl-none"><br></span>%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 border d-grid">
                    <div class="row">
                        <div class="col-lg-3 col-xl-3">{{ $dei->bus_voltage }} <span class="d-xl-none"><br></span> V</div>
                        <div class="col-lg-3 col-xl-3 border-start">{{ $dei->battery_voltage }}<span class="d-xl-none"><br></span>V</div>
                        <div class="col-lg-3 col-xl-3 border-start">{{ $dei->battery_charging_current }}<span class="d-xl-none"><br></span>A</div>
                        <div class="col-lg-3 col-xl-3 border-start">{{ $dei->inverter_heat_sink_temperature }}<span class="d-xl-none"><br></span>C</div>
                    </div>
                </div>
                <div class="col-lg-3 col-xl-3 border">
                    <div class="row">
                        <div class="col-lg-3 col-xl-3">{{ $dei->rssi }}<span class="d-xl-none"><br></span>%</div>
                        <div class="col-lg-3 col-xl-2 border-start">
                            @php
                                if ($dei->com_status == 1) {
                                    echo 'T';
                                } else {
                                    echo 'F';
                                }
                            @endphp
                        </div>
                        <div class="col-lg-6 col-xl-7 border-start">
                            {{ $dei->created_at }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
