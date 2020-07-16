@extends('layouts.app')

@section('title', 'Sign up')

@section('content')

    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg'); max-height:200px;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center">
          	{{-- <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About</span></p>
            <h1 class="mb-3 bread">Browse Jobs</h1> --}}
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <div class="card">
                      <div class="card-header">{{ __('Profile') }}</div>
                      <div class="card-body">
                        
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection