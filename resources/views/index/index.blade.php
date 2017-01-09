@extends('welcome')

@section('css')
    @include('base.base_css')
@endsection



@section('content')
    <main class="cd-main-content">

        <!-- HOME SECTION
================================================== -->
        <section id="homepage" class="home page-section parallax-2" data-background="images/home/image_54.jpg">
            <div class="table-content">
                <div class="table-center-text">
                    <div class="container">
                        <h2 class="font-face1 heading1 mb-40 mb-xs-30">信任 . 洞见 . 知识.</h2>
                        <h1 class="text-rotate font-face1 heading2 mb-40 mb-xs-30">知识精英 & 全景社交</h1>

                    </div>
                </div>
            </div>
            <div class="btn-readmore local-scroll">
                <a class="btn-readmore-content" href="#about_us">
                    <div class="container-point">
                        <div class="point"></div>
                        <div class="point"></div>
                        <div class="point"></div>
                    </div>
                </a>
            </div>
        </section>
        <!-- SECTION ABOUT
				================================================== 	-->
        <section id="about_us" class="page-section big-section">
            <div class="container relative">
                <h2 class="font-face1 section-heading mb-60 mb-sm-40">About 兰亭驿
                </h2>
                <div class="row">
                    <div class="col-md-4 mb-sm-40 mb-xs-30">
                        <div class="block-container font-face1 fw100 light-text">
                            原创   <span>知识精英</span>  实名  社会热点  全球名校  资源对接  分享  情怀  <span>全景社交</span>  交流  社区  高智   <span>互助联盟</span>,   对话 互助 使命  <span>良币驱劣币</span>     话题 时事新闻 熟人 诚信 互惠 共赢 公益  <span>信任体系</span> 对话 人文情怀  <span>知识传播</span> 线下活动
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-sm-40 mb-xs-30">
                        <div class="light-text">
                            兰亭驿是一款知识精英社交APP a design agency id dolor consectetur fermentum nibh volutpat that creates data driven diam enim sagittis quam tools and experiences. We discover metus pellentesque mattis. new paths, solve complexity and find the essence. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus design agency design agency id dolor consectetur fermentum nibh volutpat that creates data.
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-sm-40 mb-xs-30">
                        <!-- Standard progress bar -->
                        <div class="skills-name font-face1 uppercase lp-2">知识分享</div>
                        <div class="progress pb-color">
                            <div class="progress-bar wow slideInLeft" data-wow-offset="300" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>

                        <div class="skills-name font-face1 uppercase lp-2">校友互助</div>
                        <div class="progress pb-color">
                            <div class="progress-bar wow slideInRight" data-wow-offset="300" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                <span class="sr-only">70% Complete</span>
                            </div>
                        </div>

                        <div class="skills-name font-face1 uppercase lp-2">福利活动</div>
                        <div class="progress pb-color">
                            <div class="progress-bar wow slideInLeft" data-wow-offset="300" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                        <!-- End Standard progress bar -->
                    </div>
                </div>
            </div>
        </section>
        <hr class="nomargin nopadding"/>
        <!-- SECTION NUMBER
                        ================================================== -->
        <section class="page-section">
            <div class="container">
                <div class="fact-wrapper fact-4col clearfix">
                    <ul>
                        <li>
                            <div class="fact-inner">
										<span class="fact-name font-face1  uppercase lp-2">
											精品文章
										</span>
                                <h2 class="counter heading3 mt-0 mb-0 nocase">2223</h2>
                                <div class="fact-icon">
                                    <i class="lnr lnr-diamond"></i>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="fact-inner">
										<span class="fact-name font-face1  uppercase lp-2">
											认证用户
										</span>
                                <h2 class="counter heading3 mt-0 mb-0 nocase">1234567</h2>
                                <div class="fact-icon">
                                    <i class="lnr lnr-users"></i>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="fact-inner">
										<span class="fact-name font-face1  uppercase lp-2">
											独到的观点
										</span>
                                <h2 class="counter heading3 mt-0 mb-0 nocase">82736</h2>
                                <div class="fact-icon">
                                    <i class="lnr lnr-laptop-phone"></i>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="fact-inner">
										<span class="fact-name font-face1  uppercase lp-2">
											成功的互助
										</span>
                                <h2 class="counter heading3 mt-0 mb-0 nocase">331</h2>
                                <div class="fact-icon">
                                    <i class="lnr lnr-heart"></i>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </section>

        <hr class="nomargin nopadding"/>
        <!-- SECTION TEAM
                        ================================================== -->
        <section id="team-section" class="page-section grey-section big-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 mb-60 mb-sm-40 text-center">
                        <h2 class="font-face1 section-heading">TEAM</h2>
                        <p class="light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit liquam hendrerit lorem at elit facilisis rutrum.</p>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-md-3 col-sm-6">

                        <div class="alt-team text-center">
                            <div class="alt-team-image">
                                <img src="images/team/team-img1.jpg" alt=""/>
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="alt-team-name font-face1">
                                <h4 class="heading6">Ryan Martin</h4>
                                <div class="alt-team-desig uppercase lp-2">Creative Director</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="alt-team text-center">
                            <div class="alt-team-image">
                                <img src="images/team/team-img2.jpg" alt=""/>
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="alt-team-name font-face1">
                                <h4 class="heading6">Betsy Basom</h4>
                                <div class="alt-team-desig uppercase lp-2">Developer</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="alt-team text-center">
                            <div class="alt-team-image">
                                <img src="images/team/team-img3.jpg" alt="" />
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="alt-team-name font-face1">
                                <h4 class="heading6">Eliot White</h4>
                                <div class="alt-team-desig uppercase lp-2">Account Manager</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="alt-team text-center">
                            <div class="alt-team-image">
                                <img src="images/team/team-img4.jpg" alt="" />
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="alt-team-name font-face1">
                                <h4 class="heading6">Getchi Melonir</h4>
                                <div class="alt-team-desig uppercase lp-2">Account Manager</div>
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
