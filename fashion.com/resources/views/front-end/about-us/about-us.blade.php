@extends('front-end.master')

@section('title')
    About us
    @endsection

@section('body')
    <!-- about -->
    <div class="about agileinfo">
        <div class="container">
            <h3 class="agileits-title">About Us</h3>
            <div class="col-md-6 about-w3left">
                <h4>Sed tincidunt <br> velit fermentum eget</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis, eget placerat mauris sed lectus tellus. Fusce eu semper lacus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis, eget placerat mauris sed lectus tellus. Fusce eu semper lacus, sodales id elit a feugiat porttitor nulla.</p>

                <a href="single.html" class="button button-isi"><span>Read More</span><i class="icon glyphicon glyphicon-arrow-right"></i></a>
            </div>
            <div class="col-md-6 about-w3right">
                <img src="{{ asset('/') }}front-end/images/g4.jpg" alt=""/>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //about -->
    <!-- team -->
    <div class="team">
        <div class="container">
            <h3 class="agileits-title">Designers</h3>
            <div class="team-row w3ls-team-row">
                <div class="col-md-3 col-sm-3 col-xs-6 team-wthree-grids">
                    <div class="w3ls-effect">
                        <img src="{{ asset('/') }}front-end/images/img5.jpg" alt="img">
                        <div class="w3layouts-caption">
                            <h4>Henry Ken</h4>
                            <p>Designer</p>
                        </div>
                        <div class="wthree-icon social-icon">
                            <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 team-wthree-grids">
                    <div class="w3ls-effect">
                        <img src="{{ asset('/') }}front-end/images/img2.jpg" alt="img">
                        <div class="w3layouts-caption">
                            <h4>Mark Sophia</h4>
                            <p>Director</p>
                        </div>
                        <div class="wthree-icon social-icon">
                            <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 team-wthree-grids">
                    <div class="w3ls-effect">
                        <img src="{{ asset('/') }}front-end/images/img3.jpg" alt="img">
                        <div class="w3layouts-caption">
                            <h4>Smith Jacob</h4>
                            <p>Manager</p>
                        </div>
                        <div class="wthree-icon social-icon">
                            <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6 team-wthree-grids">
                    <div class="w3ls-effect">
                        <img src="{{ asset('/') }}front-end/images/img4.jpg" alt="img">
                        <div class="w3layouts-caption">
                            <h4>Laura Hill</h4>
                            <p>Designer</p>
                        </div>
                        <div class="wthree-icon social-icon">
                            <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    @endsection