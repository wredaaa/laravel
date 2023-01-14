@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <a href="/home" class="btn btn-info mb-1"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
            <div class="card">
                <div class="card-header">{{ __('Detail Job') }}</div>
                    <div class="row m-3">
                        <div class="col-md-8">
                            <span style="color: darkgrey;"> {{ $detailJob['type'] }} / {{ $detailJob['location'] }} </span>
                            <p style="color: gray;font-weight: bold;font-size: 20px;"> {{ $detailJob['title'] }} </p>
                        </div>
                        <div class="col-md-4" style="text-align: right;align-self: center;margin-top: -15px;">
                            <a href="{{ $detailJob['url'] }}" target="_blank" class="btn btn-info">Apply Job</a>
                        </div>
                        <hr/>
                        {!! $detailJob['description'] !!}
                    </div>    
            </div>
        </div>
    </div>
</div>
@endsection
