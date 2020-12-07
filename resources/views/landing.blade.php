@extends('layouts.simple')

@section('content')
    <!-- Hero -->
    <div class="hero bg-white overflow-hidden">
        <div class="hero-inner">
            <div class="content content-full text-center">
                <h1 class="font-w700 mb-2">
                    OneUI <span class="font-w400">+ Laravel <span class="text-danger">8</span></span>
                </h1>
                <p class="font-size-lg font-w500 text-muted mb-4">
                    Welcome to the starter kit! Build something amazing!
                </p>
                <a class="btn btn-primary px-4 py-2 m-1 text-uppercase font-size-sm" href="/dashboard">
                    Enter Dashboard
                    <i class="fa fa-fw fa-arrow-right ml-1"></i> 
                </a>
            </div>
        </div>
    </div>
    <!-- END Hero -->
@endsection
