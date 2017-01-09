@extends('welcome')

@section('css')
    @include('base.base_css')
@endsection



@section('content')
    <main class="cd-main-content">
        <!-- HOME SECTION
                    ================================================== -->
        <section id="homepage" class="fixed-height-600 page-section overlay-dark-alpha-30 parallax-2"
                 data-background="../images/home/image_4.jpg">
            <div class="height-parent container">
                <div class="table-content">
                    <div class="table-center-text">

                        <h2 class="font-face1 heading1 white-color mb-40 mb-xs-30">洞察心理 . 极致体验 . 生产价值.</h2>
                        <h1 class="font-face1 heading2 white-color mb-40 mb-xs-30">用户研究 & 产品设计</h1>
                        <div class="local-scroll">
                            <a href="#join-section" class="btn bg-white">产品职位</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <hr class="nomargin nopadding"/>
        <!-- SECTION WORK	-->
        <section class="page-section small-section">
            <div class="container relative">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 mb-60 mb-sm-40 text-center">
                        <h2 class="font-face1 section-heading">我们怎么做产品</h2>
                        <p class="light-text">
                            我们相信一个产品人的灵感与直觉，但同时我们更注重数据验证的重要性。
                            我们会天马行空，但我们的猜测一定基于逻辑。
                            我们不止很会说，我们更擅长落地实现。
                            我们有强大的经验基础，同时我们又喜欢追赶潮流的前沿。</p>
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
        <!-- SECTION Join US
================================================== -->
        <section id="join-section" class="page-section small-section">
            <div class="container relative">
                <h2 class="font-face1 section-heading mb-60 mb-sm-40">想加入我们?</h2>
                <div class="row multi-columns-row">
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                        <div class="box-layout text-center">
                            <object data="../assets/Linearicons/SVG/phone.svg" type="image/svg+xml"
                                    class="icon-media anim_feature_icon"></object>
                            <h4 class="font-face1 heading6 mb-20">高级产品经理（移动社交）</h4>
                            <a class="btn bg-black" href="#">查看职位</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                        <div class="box-layout fill text-center">
                            <object data="../assets/Linearicons/SVG/book.svg"
                                    type="image/svg+xml" class="icon-media anim_feature_icon"></object>
                            <h4 class="font-face1 heading6 mb-20">高级产品经理（内容社区）</h4>
                            <a class="btn bg-black" href="#">查看职位</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                        <div class="box-layout text-center">
                            <object data="../assets/linea_complete/_basic/_SVG/basic_laptop.svg" type="image/svg+xml"
                                    class="icon-media anim_feature_icon"></object>
                            <h4 class="font-face1 heading6 mb-20">产品经理（电商系统）</h4>
                            <a class="btn bg-black" href="#">查看职位</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                        <div class="box-layout fill text-center">
                            <object data="../assets/linea_complete/_basic/_SVG/basic_laptop.svg"
                                    type="image/svg+xml" class="icon-media anim_feature_icon"></object>
                            <h4 class="font-face1 heading6 mb-20">产品经理（后台系统）</h4>
                            <a class="btn bg-black" href="#">查看职位</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                        <div class="box-layout fill text-center">
                            <object data="../assets/linea_complete/_basic/_SVG/basic_lightbulb.svg" type="image/svg+xml"
                                    class="icon-media anim_feature_icon"></object>
                            <h4 class="font-face1 heading6 mb-20">产品经理（个人信用）</h4>
                            <a class="btn bg-black" href="#">查看职位</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                        <div class="box-layout text-center">
                            <object data="../assets/linea_complete/_basic/_SVG/basic_lightbulb.svg"
                                    type="image/svg+xml" class="icon-media anim_feature_icon"></object>
                            <h4 class="font-face1 heading6 mb-20">用户研究</h4>
                            <a class="btn bg-black" href="#">查看职位</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                        <div class="box-layout fill text-center">
                            <object data="../assets/linea_complete/_basic/_SVG/basic_clock.svg" type="image/svg+xml"
                                    class="icon-media anim_feature_icon"></object>
                            <h4 class="font-face1 heading6 mb-20">产品助理</h4>
                            <a class="btn bg-black" href="#">查看职位</a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                        <div class="box-layout text-center">
                            <object data="../assets/linea_complete/_basic/_SVG/basic_accelerator.svg"
                                    type="image/svg+xml" class="icon-media anim_feature_icon"></object>
                            <h4 class="font-face1 heading6 mb-20">产品实习生</h4>
                            <a class="btn bg-black" href="#">查看职位</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 mt-100 mt-md-80 mt-sm-60 text-center">
                        <h2 class="heading5 mt-0 font-face1 fw700 mb-20">您有特殊才能想发挥？</h2>
                        <a class="btn bg-black" href="#">直接发简历给我们！</a>

                    </div>
                </div>
            </div>
        </section>

        <hr class="nomargin nopadding"/>
    </main>


@endsection


@section('js')

    @include('base.base_js')

    <!-- BEGIN PAGE LEVEL JS -->



    <!-- END PAGE LEVEL JS -->
@endsection
