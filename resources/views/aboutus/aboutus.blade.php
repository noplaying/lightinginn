@extends('welcome')

@section('css')
    @include('base.base_css')
@endsection



@section('content')
    <main class="cd-main-content">

        <!-- SECTION CONTACT
                        ================================================== -->
        <section id="contact" class="page-section big-section scroll" data-background="images/home/image_4.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 mb-60 mb-sm-40 text-center">
                        <h2 class="font-face1 section-heading">联系我们</h2>
                        <p class="light-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit liquam hendrerit lorem at elit facilisis rutrum.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <div class="contact-email clearfix">
                                    <h4 class="font-face1 heading6 mb-20 text-center">办公地点</h4>
                                    <object data="assets/linea_complete/_basic/_SVG/basic_geolocalize-05.svg" type="image/svg+xml" class="icon-media anim_feature_icon"></object>
                                    <p class="light-text">北京市海淀区<br>华清嘉园 甲15号楼<br>707室</p>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center">
                                <div class="contact-email clearfix">
                                    <h4 class="font-face1 heading6 mb-20 text-center">联系电话</h4>
                                    <object data="assets/linea_complete/_basic_elaboration/_SVG/basic_elaboration_message_happy.svg" type="image/svg+xml" class="icon-media anim_feature_icon"></object>
                                    <p class="light-text">商务合作<br>+40 762 321 762<br>工作日 9:00-22:00 <br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 mt-100 mt-md-80 mt-sm-60 text-center">
                        <h2 class="heading5 mt-0 font-face1 fw700 mb-20">想看我们在那？</h2>
                        <a class="btn bg-black " href="http://map.baidu.com/?newmap=1&shareurl=1&l=19&tn=B_NORMAL_MAP&hb=B_SATELLITE_STREET&c=12951328,4837740">打开地图</a>
                    </div>
                </div>
            </div>
            <div class="contact-form-overlay">
                <div class="table-content">
                    <div class="table-center-text">
                        <div class="contact-form-wrapper">
                            <form autocomplete="off" id="c_form" class="form">
                                <div class="clearfix">
                                    <!-- Name -->
                                    <div class="form-group">
                                        <input type="text" required="" pattern=".{3,100}" placeholder="Name" class="full_width" id="name" name="name" style="">
                                    </div>
                                    <!-- Email -->
                                    <div class="form-group">
                                        <input type="email" required="" pattern=".{5,100}" placeholder="Email" class="full_width" id="email" name="email" style="">
                                    </div>
                                    <!-- Message -->
                                    <div class="form-group">
                                        <textarea placeholder="Message" rows="6" style="height:89px" class="full_width" id="message" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="mt-30 text-center">
                                        <button id="submit_btn" class="btn btn-icon bg-white white-color"><i class="fa fa-send"></i></button>
                                        <button id="close_btn" class="closeContact_Form btn btn-icon bg-white white-color"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>

                            </form>
                            <div id="result"></div>
                        </div>
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
