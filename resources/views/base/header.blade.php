<!-- Navigation panel================================================== -->
<nav class="main-nav transparent stick-fixed">
    <div class="full-wrapper relative clearfix">
        <!-- Logo -->
        <div class="header-logo-wrap">
            <a href="{{ URL::to('/') }}" class="logo">
                <img src="{{ URL::asset('images/logo-lt2.png') }}" width="145" height="40" alt="" />
            </a>
        </div>
        <!-- Logo -->
        <div class="header-nav-section">
            <div class="section-navigation local-scroll">
                <a href="{{ URL::to('/') }}" class="section-nav">
                    <span class="lnr lnr-arrow-down"></span>
                </a>
            </div>
        </div>
        <!-- Mobile nav bars -->
        <div class="mobile-nav">
            <i class="fa fa-bars"></i>
        </div>
        <!-- Main Menu -->
        <div class="nav-wrapper large-nav">
            <ul class="clearlist local-scroll">
                <!-- Multiple column menu example -->
                <li>
                    <a href="{{ URL::to('/') }}" class="active">首页</a>
                </li>
                <!-- End Multiple column menu example -->
                <li><a href="{{ URL::to('/product') }}">产品下载</a></li>
                <!-- Sub menu Example -->
                <li>
                    <a href="#" class="menu-down">加入我们 <i class="fa fa-angle-down"></i></a>
                    <!-- Sub -->
                    <ul class="nav-sub">
                        <li>
                            <a href="{{ URL::to('/team') }}">团队简介</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/team/pm') }}">产品团队</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/team/dev') }}">研发团队</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/team/ui') }}">设计团队</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/team/op') }}">运营团队</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/team/bd') }}">商务团队</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/team/volunteer') }}">志愿者</a>
                        </li>
                    </ul>
                    <!-- End Sub -->
                </li>
                <!-- End Sub menu Example -->
                <li><a href="{{ URL::to('/aboutus') }}">关于我们</a></li>
                <li><a class="border-menu grey-section menu-down" href="{{ URL::to('/publish') }}">在线发布</a>
                </li>
            </ul>
        </div>
        <!-- End Main Menu -->
    </div>
</nav>
<!-- End Navigation panel -->