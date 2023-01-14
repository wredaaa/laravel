@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form method="GET" action="/home">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="exampleFormControlInput1" class="form-label">Job Description</label>
                        <input id="description" type="text" class="form-control " name="description" value="{{ $description }}">  
                    </div>
                    <div class="col-md-4">
                        <label for="exampleFormControlInput1" class="form-label">Location</label>
                        <input id="location" type="text" class="form-control " name="location" value="{{ $location }}">  
                    </div>

                    <div class="form-check col-md-2" style="margin-top: 38px;">
                        <input class="form-check-input" type="checkbox" value="true" id="type" name="type" {{ $type ? 'checked' : '' }}>
                        <label class="form-check-label" for="type">
                            Full Time Only
                        </label>
                    </div>      
                    <div class="col-md-2" style="margin-top: 32px;">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
            
            <div class="card">
                <div class="card-header">{{ __('Job list') }}</div>
                <div>
                    @foreach ($jobs as $job)
                        <a href="/detail/{{ $job['id'] }}" style=" text-decoration: none;">
                            <div class="row m-3">
                                <div class="col-md-8">
                                    <span style="color: dodgerblue; font-weight: bold;"> {{ $job['title'] }} </span>
                                    <p style=" color: darkgrey;"> {{ $job['company'] }} 
                                        - 
                                        <span style="color: green;"> {{ $job['type'] }} </span>
                                    </p>
                                </div>
                                <div class="col-md-4" style="text-align: right;">
                                    <span style="color: darkgrey;"> {{ $job['location'] }} </span>
                                    <p> {{ $job['created_at'] }} </p>
                                </div>
                                <hr/>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
