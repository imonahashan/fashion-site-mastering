@extends('front-end.master')

@section('title')
    gallery
@endsection

@section('body')
    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <h3 class="agileits-title">Our Gallery</h3>
            <div class="gallery-agileinfo">
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                    <a href="{{ asset('/') }}front-end/images/g1.jpg" class="imghvr-hinge-right figure">
                        <img src="{{ asset('/') }}front-end/images/g1.jpg" alt="" title="New Designs Image"/>
                        <div class="agile-figcaption">
                            <h4>New Designs</h4>
                            <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                    <a href="{{ asset('/') }}front-end/images/g2.jpg" class="imghvr-hinge-right figure">
                        <img src="{{ asset('/') }}front-end/images/g2.jpg" alt="" title="New Designs Image"/>
                        <div class="agile-figcaption">
                            <h4>New Designs</h4>
                            <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                    <a href="{{ asset('/') }}front-end/images/g3.jpg" class="imghvr-hinge-right figure">
                        <img src="{{ asset('/') }}front-end/images/g3.jpg" alt="" title="New Designs Image"/>
                        <div class="agile-figcaption">
                            <h4>New Designs</h4>
                            <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                    <a href="{{ asset('/') }}front-end/images/g4.jpg" class="imghvr-hinge-right figure">
                        <img src="{{ asset('/') }}front-end/images/g4.jpg" alt="" title="New Designs Image"/>
                        <div class="agile-figcaption">
                            <h4>New Designs</h4>
                            <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                    <a href="{{ asset('/') }}front-end/images/g5.jpg" class="imghvr-hinge-right figure">
                        <img src="{{ asset('/') }}front-end/images/g5.jpg" alt="" title="New Designs Image"/>
                        <div class="agile-figcaption">
                            <h4>New Designs</h4>
                            <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 w3gallery-grids">
                    <a href="{{ asset('/') }}front-end/images/img1.jpg" class="imghvr-hinge-right figure">
                        <img src="{{ asset('/') }}front-end/images/img1.jpg" alt="" title="New Designs Image"/>
                        <div class="agile-figcaption">
                            <h4>New Designs</h4>
                            <p>Phasellus elementum ullamcorper urna, eu rhoncus.</p>
                        </div>
                    </a>
                </div>
                <div class="clearfix"> </div>
                <script type="text/javascript" src="{{ asset('/') }}front-end/js/simple-lightbox.min.js"></script>
                <script>
                    $(function(){
                        var gallery = $('.w3gallery-grids a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
                    });
                </script>
            </div>
        </div>
    </div>
    <!-- //gallery -->
@endsection