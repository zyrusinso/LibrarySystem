@extends('app.layouts.master')

@section('title')Admin - Dashboard | Library
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/whether-icon.css')}}">
@endpush
@section('content')
@component('app.components.admin_breadcrumb')
@slot('breadcrumb_title')
<h3>Dashboard</h3>
@endslot
<li class="breadcrumb-item active">Dashboard</li>
@endcomponent

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-md-12 box-col-12 des-xl-50 profile-greeting-width">
            <div class="card profile-greeting">
                <div class="card-header">
                    <div class="header-top">

                    </div>
                </div>
                <div class="card-body text-center p-t-0">
                    <h3 class="font-light">Welcome back {{ auth()->user()->name }}!</h3>
                    <p>Welcome to the Quezon City University Library!</p>
                        <a href="#" class="btn btn-light">View Logs</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden border-0">
                <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center"><i data-feather="user-check"></i></div>
                        <div class="media-body">
                            <span class="m-0">Visitors</span>
                            <h4 class="mb-0 counter">6659</h4>
                            <i class="icon-bg" data-feather="user-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden border-0">
                <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center"><i data-feather="book"></i></div>
                        <div class="media-body">
                            <span class="m-0">Books</span>
                            <h4 class="mb-0 counter">9856</h4>
                            <i class="icon-bg" data-feather="book"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden border-0">
                <div class="bg-info b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                        <div class="media-body">
                            <span class="m-0">Request</span>
                            <h4 class="mb-0 counter">893</h4>
                            <i class="icon-bg" data-feather="message-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3 col-lg-6">
            <div class="card o-hidden border-0">
                <div class="bg-success b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center"><i data-feather="share"></i></div>
                        <div class="media-body">
                            <span class="m-0">Borrowed</span>
                            <h4 class="mb-0 counter">4531</h4>
                            <i class="icon-bg" data-feather="share"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/general-widget.js')}}"></script>
<script src="{{asset('assets/js/height-equal.js')}}"></script>
<script src="{{asset('assets/js/tooltip-init.js')}}"></script>
@endpush
@endsection