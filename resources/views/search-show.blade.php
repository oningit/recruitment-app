@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Job Information
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Company Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="job" class="col-md-4 col-form-label text-md-end text-start"><strong>Job Title:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->job }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="location" class="col-md-4 col-form-label text-md-end text-start"><strong>Location:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->location }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="address" class="col-md-4 col-form-label text-md-end text-start"><strong>Address:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->address }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->email }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {!! nl2br(e($product->description)) !!}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection