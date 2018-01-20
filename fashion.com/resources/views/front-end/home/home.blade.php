@extends('front-end.master')

@section('title')
    Home
    @endsection

@section('body')
    <div class="welcome agileits">
        <div class="container">
            <div class="welcome-w3lsrow">
                <div class="col-md-5 col-sm-5 w3welcome-left">
                    <div class="w3welcome-text">
                        <h5 class="w3l-subtitle">- New Trends</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 w3welcome-img">

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="welcome-w3lsrow2">
                <div class="col-sm-3 col-xs-3 w3welcome-grids">
                    <img src="{{ asset('/') }}front-end/images/img2.jpg" class="img-responsive" alt=""/>
                </div>
                <div class="col-sm-3 col-xs-3 w3welcome-grids">
                    <img src="{{ asset('/') }}front-end/images/img3.jpg" class="img-responsive" alt=""/>
                </div>
                <div class="col-sm-3 col-xs-3 w3welcome-grids">
                    <img src="{{ asset('/') }}front-end/images/img4.jpg" class="img-responsive" alt=""/>
                </div>
                <div class="col-sm-3 col-xs-3 w3welcome-grids">
                    <img src="{{ asset('/') }}front-end/images/img5.jpg" class="img-responsive" alt=""/>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //welcome -->
    <!-- services -->
    <div class="services">
        <div class="container">
            <h3 class="agileits-title">Services</h3>
            <div class="services-agileinfo">
                <div class="col-sm-3 col-xs-6 services-w3grids">
                    <h5>1</h5>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                </div>
                <div class="col-sm-3 col-xs-6 services-w3grids">
                    <h5>2</h5>
                    <h6>Phasellus at placerat ante, consectetur adipiscing elit. </h6>
                </div>
                <div class="col-sm-3 col-xs-6 services-w3grids">
                    <h5>3</h5>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                </div>
                <div class="col-sm-3 col-xs-6 services-w3grids">
                    <h5>4</h5>
                    <h6>Phasellus at placerat ante, consectetur adipiscing elit. </h6>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //services -->

    @endsection
