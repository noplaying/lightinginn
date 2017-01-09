@extends('welcome')

@section('css')
    @include('base.base_css')
@endsection



@section('content')
    <main class="cd-main-content">
        <!-- HOME SECTION
                    ================================================== -->
        <section id="homepage" class="fixed-height-600 page-section overlay-dark-alpha-30 parallax-2" data-background="../images/home/image_4.jpg">
            <div class="height-parent container">
                <div class="table-content">
                    <div class="table-center-text">

                        <h2 class="font-face1 heading1 white-color mb-40 mb-xs-30">洞察心理 . 极致体验 . 生产价值.</h2>
                        <h1 class="font-face1 heading2 white-color mb-40 mb-xs-30">用户研究 & 产品设计</h1>
                        <div class="local-scroll">
                            <a href="#latest_work" class="btn bg-white">招聘职位</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <hr class="nomargin nopadding"/>
        <!-- SECTION WORK	-->
        <section class="page-section big-section">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 mb-60 mb-sm-40 text-center">
                        <h2 class="font-face1 section-heading">Latest work</h2>
                        <p class="light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit liquam hendrerit lorem at elit facilisis rutrum.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="block-grid block-item-3 block-grid-gut masonry clearfix">

                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="../images/home/image_4.jpg" class="gallery-lightbox mfp-image">
                                        <img src="../images/gallery/gallery-img1.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>

                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="../images/gallery/gallery-img2.jpg" class="gallery-lightbox mfp-image">
                                        <img src="../images/gallery/gallery-img2.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>

                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="../images/gallery/gallery-img3.jpg" class="gallery-lightbox mfp-image">
                                        <img src="../images/gallery/gallery-img3.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>

                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="../images/gallery/gallery-img4.jpg" class="gallery-lightbox mfp-image">
                                        <img src="../images/gallery/gallery-img4.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>

                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="../images/gallery/gallery-img5.jpg" class="gallery-lightbox mfp-image">
                                        <img src="../images/gallery/gallery-img5.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>

                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="../images/gallery/gallery-img1.jpg" class="gallery-lightbox mfp-image">
                                        <img src="../images/gallery/gallery-img1.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>

                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="../images/gallery/gallery-img2.jpg" class="gallery-lightbox mfp-image">
                                        <img src="../images/gallery/gallery-img2.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>

                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="../images/gallery/gallery-img3.jpg" class="gallery-lightbox mfp-image">
                                        <img src="../images/gallery/gallery-img3.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>

                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="../images/gallery/gallery-img4.jpg" class="gallery-lightbox mfp-image">
                                        <img src="../images/gallery/gallery-img4.jpg" alt=""/>
                                    </a>
                                </div>
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
