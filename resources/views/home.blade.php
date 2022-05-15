@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{-- <h2>{{ $joins[0]->output_load_percent }}</h2> --}}

            {{-- @for ($i = 1; $i < 7; $i++)
                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            inverter {{ $i }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">information</p>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            @endfor --}}

            @php
                $arr1 = 0;
            @endphp
            @foreach ($inverters as $inverter)
                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            {{ $inverter->name }}
                        </div>
                        <div class="card-body">
                            <p class="card-text text-center mt-3">{{ $joins[$arr1][0]->output_load_percent }}%</p>
                            {{-- <h5 class="card-title text-center"></h5> --}}
                            @php
                                if ($inverter->warnings == 0) {
                                    $class = 'success';
                                } elseif ($inverter->warnings == 1) {
                                    $class = 'warning';
                                } else {
                                    $class = 'danger';
                                }
                            @endphp
                            <a href="{{ route('inverter.show1', ['id' => $inverter->id]) }}" class="btn btn-{{ $class }}">Details</a>
                        </div>
                    </div>
                </div>
                @php
                    $arr1++;
                @endphp
            @endforeach

        </div>


        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> --}}
    </div>
    </div>
@endsection
