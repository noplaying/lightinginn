@extends('welcome')

@section('css')
    @include('base.base_css')
@endsection



@section('content')
    <main class="cd-main-content">
        <!-- SECTION APP
                        ================================================== -->
        <section id="features_app" class="page-section big-section alt-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 mb-60 mb-sm-40 text-center">
                        <h2 class="font-face1 section-heading">在苹果App store下载我们的应用</h2>
                        <p class="light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit liquam hendrerit lorem at elit facilisis rutrum.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-md-offset-1 col-sm-4">
                        <div class="info info-horizontal wow slideInLeft">
                            <div class="icon icon-info">
                                <i class="lnr lnr-flag"></i>
                            </div>
                            <div class="description">
                                <h4 class="font-face1 heading6 mb-20 text-left">Apple store</h4>
                                <span class="light-text">Lorem ipsum dolor sit amet, and the consectetur adipiscing elit a hendrerit leo tristique vitae. And onsectetur adipiscing elit. Neque porro quisquam estqui dolorem</span>
                            </div>
                        </div>
                        <div class="info info-horizontal wow slideInLeft">
                            <div class="icon icon-info">
                                <i class="lnr lnr-rocket"></i>
                            </div>
                            <div class="description">
                                <h4 class="font-face1 heading6 mb-20 text-left">IOS源生程序</h4>
                                <span class="light-text">Lorem ipsum dolor sit amet, and the consectetur adipiscing elit a hendrerit leo tristique vitae. And onsectetur adipiscing elit.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 mt-sm-70">
                        <div class="app-phone">
                            <div class="table-content">
                                <div class="table-center-text">
                                    <img alt="" src="images/iphone-black.png">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="info info-horizontal wow slideInRight">
                            <div class="icon icon-info">
                                <i class="lnr lnr-tablet"></i>
                            </div>
                            <div class="description">
                                <h4 class="font-face1 heading6 mb-20 text-left">V1.0.0</h4>
                                <span class="light-text">Lorem ipsum dolor sit amet, and the consectetur adipiscing elit a hendrerit leo tristique vitae. And onsectetur adipiscing elit. Neque porro quisquam estqui dolorem</span>
                            </div>
                        </div>
                        <div class="info info-horizontal wow slideInRight">
                            <div class="icon icon-info">
                                <i class="lnr lnr-diamond"></i>
                            </div>
                            <div class="description">
                                <h4 class="font-face1 heading6 mb-20 text-left">源生程序响应速度快</h4>
                                <span class="light-text">Lorem ipsum dolor sit amet, and the consectetur adipiscing elit a hendrerit leo tristique vitae. And onsectetur adipiscing elit.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 mt-100 mt-md-80 mt-sm-60 text-center">
                        <h2 class="heading5 mt-0 font-face1 fw700 mb-20">信任从这里开始</h2>
                        <p class="light-text">下载兰亭驿</p>


                        <a class="btn bg-black btn-app" href="#"><i aria-hidden="true" class="fa fa-apple"></i><span>Available on the</span>App Store</a>
                        <span class="btn_seperator hidden-xs"></span>
                        <a class="btn bg-black btn-app" href="#"><i aria-hidden="true" class="fa fa-android"></i><span>您再等等</span>很快就有了</a>
                    </div>
                </div>
            </div>
        </section>
        <hr class="nomargin nopadding"/>
        <!-- SECTION FEATURES SLIDER
                        ================================================== -->
        <section id="features-section" class="page-section big-section">
            <div class="container relative">
                <h2 class="font-face1 section-heading mb-60 mb-sm-40">主要功能

                </h2>
                <div class="block-wraper">
                    <div class="slick-container features-slider">
                        <div class="slick-item">
                            <div class="features-item">
                                <div class="features-icn"><i class="lnr lnr-clock"></i></div>
                                <h4 class="font-face1 heading6 mb-20">原创</h4>
                                Creating unique the experiences between the customer and the product.
                            </div>

                        </div>

                        <div class="slick-item">
                            <div class="features-item">
                                <div class="features-icn white-color"><i class="lnr lnr-pencil"></i></div>
                                <h4 class="font-face1 heading6 mb-20">互助</h4>
                                Creating unique end experiences between the customer and the product.
                            </div>
                        </div>

                        <div class="slick-item">
                            <div class="features-item">
                                <div class="features-icn white-color"><i class="lnr lnr-magic-wand"></i></div>
                                <h4 class="font-face1 heading6 mb-20">话题</h4>
                                Creating unique who experiences between the customer and the product.
                            </div>
                        </div>

                        <div class="slick-item">
                            <div class="features-item">
                                <div class="features-icn white-color"><i class="lnr lnr-laptop-phone"></i></div>
                                <h4 class="font-face1 heading6 mb-20">圈子</h4>
                                Creating unique the experiences between the customer and the product.
                            </div>
                        </div>

                        <div class="slick-item">
                            <div class="features-item">
                                <div class="features-icn white-color"><i class="lnr lnr-pointer-up"></i></div>
                                <h4 class="font-face1 heading6 mb-20">活动</h4>
                                Creating unique and experiences between the customer and the product.
                            </div>
                        </div>

                        <div class="slick-item">
                            <div class="features-item">
                                <div class="features-icn white-color"><i class="lnr lnr-screen"></i></div>
                                <h4 class="font-face1 heading6 mb-20">福利</h4>
                                Creating unique and experiences between the customer and the product.
                            </div>
                        </div>

                        <div class="slick-item">
                            <div class="features-item">
                                <div class="features-icn white-color"><i class="lnr lnr-sync"></i></div>
                                <h4 class="font-face1 heading6 mb-20">公益</h4>
                                Creating unique the experiences between the customer and the product.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection


@section('js')

    @include('base.base_js')

    <!-- BEGIN PAGE LEVEL JS -->



    <!-- END PAGE LEVEL JS -->
@endsection
