@extends('welcome')

@section('css')
    @include('base.base_css')
@endsection

@section('content')
    <main class="cd-main-content">
        <!-- HOME SECTION-->
        <section id="homepage" class="fixed-height-600 page-section">
            <div class="height-parent container">
                <div class="table-content">
                    <div class="table-center-text">
                        <h2 class="font-face1 heading1 mt-40 mb-40 mb-xs-30">我们是家什么样的公司？</h2>
                        <h1 class="font-face1 heading2 mb-40 mb-xs-30">互助 & 共享</h1>
                        <div class="local-scroll">
                            <div class="col-md-6 col-md-offset-3 mb-60 mb-sm-40 text-center">
                                <p class="light-text">凝聚名校校友为核心的知识精英圈层，以精英的力量推动社会的发展，以匠心精神服务校友！</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="nomargin nopadding"/>
        <!-- SECTION 创始人 -->
        <section id="team-section" class="page-section grey-section big-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 mb-60 mb-sm-40 text-center">
                        <h2 class="font-face1 section-heading">创始人</h2>
                        <p class="light-text">创始人是北大法学院校友，巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉巴拉写一堆</p>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-md-3 col-sm-6">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="alt-team text-center">
                            <div class="alt-team-image">
                                <img src="images/team/suchunli.jpg" alt=""/>
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="alt-team-name font-face1">
                                <h4 class="heading6">苏春丽</h4>
                                <div class="alt-team-desig uppercase lp-2">CEO 创始人</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="alt-team text-center">
                            <div class="alt-team-image">
                                <img src="images/team/chengzhijuan.jpg" alt="" />
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="alt-team-name font-face1">
                                <h4 class="heading6">程志娟</h4>
                                <div class="alt-team-desig uppercase lp-2">联合创始人</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION MAC-BOOK FADE SLIDER CONTENT -->
        <section class="page-section big-section">
            <div class="container relative">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="macbook_pro mb-sm-60">
                            <div class="display">
                                <div class="screen">
                                    <div class="slick-container macbook-fade height-parent">
                                        <div class="slick-item height-parent" data-background="images/team/allteam.jpg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="keyboard">
                                <div class="open"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">&nbsp;
                    </div>
                    <div class="col-sm-4 center-xs">
                        <h2 class="font-face1 section-heading">和谁一起工作</h2>
                        <p>巴拉巴拉写一堆介绍小伙伴的  左边图片换掉</p>
                    </div>
                    <div class="col-sm-1">&nbsp;
                    </div>
                </div>
            </div>
        </section>
        <hr class="nomargin nopadding"/>
        <!-- SECTION MAC-BOOK FADE SLIDER CONTENT-->
        <section class="page-section big-section">
            <div class="container relative">
                <div class="row">
                    <div class="col-sm-1">&nbsp;
                    </div>
                    <div class="col-sm-4 center-xs">
                        <h2 class="font-face1 section-heading">介绍一下办公环境 企业文化</h2>
                        <p>巴拉巴拉写一堆介绍企业文化的 右边图片换掉</p>
                    </div>
                    <div class="col-sm-1">&nbsp;
                    </div>
                    <div class="col-sm-6">
                        <div class="macbook_pro mb-sm-60">
                            <div class="display">
                                <div class="screen">
                                    <div class="slick-container macbook-fade height-parent">
                                        <div class="slick-item height-parent" data-background="images/team/workplace.jpg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="keyboard">
                                <div class="open"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECTION ABOUT 	-->
        <section class="page-section ">
            <div class="container relative">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="block-grid block-item-3 block-grid-gut masonry clearfix">
                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="images/gallery/gallery-img1.jpg" class="gallery-lightbox mfp-image">
                                        <img src="images/gallery/gallery-img1.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="images/gallery/gallery-img2.jpg" class="gallery-lightbox mfp-image">
                                        <img src="images/gallery/gallery-img2.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="images/gallery/gallery-img3.jpg" class="gallery-lightbox mfp-image">
                                        <img src="images/gallery/gallery-img3.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="images/gallery/gallery-img4.jpg" class="gallery-lightbox mfp-image">
                                        <img src="images/gallery/gallery-img4.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="images/gallery/gallery-img5.jpg" class="gallery-lightbox mfp-image">
                                        <img src="images/gallery/gallery-img5.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="images/gallery/gallery-img1.jpg" class="gallery-lightbox mfp-image">
                                        <img src="images/gallery/gallery-img1.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="images/gallery/gallery-img2.jpg" class="gallery-lightbox mfp-image">
                                        <img src="images/gallery/gallery-img2.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="images/gallery/gallery-img3.jpg" class="gallery-lightbox mfp-image">
                                        <img src="images/gallery/gallery-img3.jpg" alt=""/>
                                    </a>
                                </div>
                            </div>
                            <div class="block-item">
                                <div class="gallery-item">
                                    <a href="images/gallery/gallery-img4.jpg" class="gallery-lightbox mfp-image">
                                        <img src="images/gallery/gallery-img4.jpg" alt=""/>
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
