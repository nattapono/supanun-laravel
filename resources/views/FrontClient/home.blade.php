@extends('FrontClient.master')
@section('vendor-style')
{{-- Page Css files --}}

@endsection
@section('title', __('gobal.title'))
@section('header')
@include('FrontClient.panels.header')
@endsection

@section('content')
<div class="header-top-absolute">
    <!-- ** Slider ** -->
    <div id="slider">
        <div id="dt-sc-rev-slider" class="dt-sc-main-slider">
            <!-- START homeslider REVOLUTION SLIDER 6.6.13 -->
            <p class="rs-p-wp-fix"></p>
            <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery"
                style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                <rs-module id="rev_slider_1_1" style="" data-version="6.6.13">
                    <rs-slides style="overflow: hidden; position: absolute;">
                        <rs-slide style="position: absolute;" data-key="rs-1" data-title="Slide"
                            data-anim="ms:1000;r:0;" data-in="o:0;" data-out="a:false;">
                            <img src="//dtaugury.wpengine.com/wp-content/plugins/revslider/public/assets/assets/dummy.png"
                                alt="Slide" title="Home" class="rev-slidebg tp-rs-img rs-lazyload"
                                data-lazyload="//dtaugury.wpengine.com/wp-content/plugins/revslider/public/assets/assets/transparent.png"
                                data-no-retina>

                            <rs-layer id="slider-1-slide-1-layer-0" data-type="text" data-xy="x:c;y:m;"
                                data-text="w:normal;s:55,40,30,18;l:68,50,37,22;"
                                data-dim="w:1920px,1414px,1074px,662px;h:920px,788px,610px,722px;" data-rsp_o="off"
                                data-rsp_bd="off" data-blendmode="multiply" data-frame_999="o:0;st:w;sR:8700;"
                                style="z-index:8;font-family:'Roboto';">
                                <div class="stars"></div><br />
                                <div class="twinkling"> </div>
                            </rs-layer>
                            <!--

                        -->
                            <rs-layer id="slider-1-slide-1-layer-2" data-type="image" data-rsp_ch="on"
                                data-xy="x:r;xo:-340px,-250px,-195px,-120px;y:m;yo:0,0,-19px,-11px;"
                                data-text="w:normal;s:20,14,10,6;l:0,18,13,8;"
                                data-dim="w:1139px,839px,637px,393px;h:907px,668px,507px,312px;"
                                data-frame_0_mask="u:t;" data-frame_1="e:power4.inOut;sp:2300;"
                                data-frame_999="o:0;st:w;sR:6700;" style="z-index:9;background-blend-mode:screen;"><img
                                    src="//dtaugury.wpengine.com/wp-content/plugins/revslider/public/assets/assets/dummy.png"
                                    alt="Image" class="tp-rs-img rs-lazyload" width="1139" height="907"
                                    data-lazyload="//dtaugury.wpengine.com/wp-content/uploads/2018/02/mystic-image5.png"
                                    data-no-retina>
                            </rs-layer>
                            <!--

                        -->
                            <rs-layer id="slider-1-slide-1-layer-3" data-type="text" data-color="#fff"
                                data-xy="x:c;y:m;yo:65px,30px,-7px,30px;"
                                data-text="w:normal,normal,normal,normal;s:55,50,40,40;l:68,68,50,46;fw:600;a:center;"
                                data-dim="w:745px,659px,483px,336px;minh:0px,none,none,none;" data-rsp_bd="off"
                                data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="st:2150;sp:1000;sR:2150;"
                                data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:5850;"
                                style="z-index:10;font-family:'Josefin Sans';">Your path is illuminated by a road-map of
                                stars.
                            </rs-layer>
                            <!--

                        -->
                            <rs-layer id="slider-1-slide-1-layer-4" data-type="text"
                                data-xy="x:c;y:m;yo:-84px,-112px,-140px,-132px;"
                                data-text="w:normal;s:25,25,23,24;l:36,26,38,36;fw:300;a:left,left,center,center;"
                                data-basealign="slide" data-rsp_bd="off" data-frame_0="y:50;"
                                data-frame_1="st:1280;sp:1000;sR:1280;" data-frame_999="o:0;st:w;sR:6720;"
                                style="z-index:11;font-family:'Josefin Sans';">Predict Future
                            </rs-layer>
                            <!--

                        -->
                            <rs-layer id="slider-1-slide-1-layer-5" data-type="text" data-color="#a3a1a1"
                                data-xy="x:c;xo:0,30px,22px,13px;y:t,t,t,m;yo:480px,422px,313px,0;"
                                data-text="w:normal;s:25,25,18,11;l:36,34,25,15;fw:300;a:center;"
                                data-dim="w:558px,467px,354px,218px;minh:0px,none,none,none;" data-vbility="f,f,f,f"
                                data-rsp_bd="off" data-frame_0="y:-100%;" data-frame_0_mask="u:t;"
                                data-frame_1="st:3000;sp:1200;sR:3000;" data-frame_1_mask="u:t;"
                                data-frame_999="o:0;st:w;sR:4800;" style="z-index:12;font-family:'Josefin Sans';">Get
                                your future predictions & forecasts perfect from the will of God.
                            </rs-layer>
                            <!--

                        --><a id="slider-1-slide-1-layer-6" class="rs-layer rev-btn"
                                href="http://dtaugury.wpengine.com/about-me/" target="_self" rel="nofollow"
                                data-type="button" data-xy="x:c;y:m;yo:195px,170px,127px,133px;"
                                data-text="w:normal;s:20,25,23,24;l:47,50,50,50;fw:300;a:left,left,center,center;"
                                data-dim="minh:0px,none,none,none;" data-vbility="t,t,t,f" data-rsp_bd="off"
                                data-padding="r:30,28,28,28;l:30,28,28,28;"
                                data-border="bos:solid;boc:rgba(255,255,255,0.35);bow:1px,1px,1px,1px;bor:25px,25px,25px,25px;"
                                data-frame_0="y:50;" data-frame_1="st:3090;sp:1000;sR:3090;"
                                data-frame_999="o:0;st:w;sR:4910;"
                                data-frame_hover="c:#000;bgc:#ffa35a;boc:#ffa35a;bor:25px,25px,25px,25px;bos:solid;bow:1px,1px,1px,1px;sp:100ms;e:power1.inOut;"
                                style="z-index:13;background-color:rgba(0,0,0,0);font-family:'Josefin Sans';">Discover
                                More
                            </a>
                            <!---->
                        </rs-slide>
                    </rs-slides>
                </rs-module>
                <script>
                setREVStartSize({
                    c: 'rev_slider_1_1',
                    rl: [1240, 1024, 778, 480],
                    el: [800, 550, 500, 450],
                    gw: [1390, 1024, 778, 480],
                    gh: [800, 550, 500, 450],
                    type: 'standard',
                    justify: '',
                    layout: 'fullwidth',
                    mh: "0"
                });
                if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES
                    .modules["revslider11"] !== undefined) {
                    window.RS_MODULES.modules["revslider11"].once = false;
                    window.revapi1 = undefined;
                    if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                }
                </script>
            </rs-module-wrap>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </div>
</div>
<!-- ** Slider End ** -->
<!-- **Main** -->
<div id="main">
    <!-- ** Container ** -->
    <div class="container">
        <!-- Primary -->
        <section id="primary" class="content-full-width">
            <!-- #post-20398 -->
            <div id="post-20398" class="post-20398 page type-page status-publish hentry">
                <div data-elementor-type="wp-page" data-elementor-id="20398" class="elementor elementor-20398">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-6b56aff elementor-section-content-middle elementor-section-stretched moon-sign-section elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="6b56aff" data-element_type="section"
                                data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;https:\/\/dtaugury.wpengine.com\/wp-content\/uploads\/2020\/01\/moon-phasing1.png&quot;,&quot;id&quot;:20444,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;750b093&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;zoom&quot;,&quot;jet_parallax_layout_bg_x&quot;:0,&quot;jet_parallax_layout_bg_y&quot;:70,&quot;jet_parallax_layout_bg_size&quot;:&quot;contain&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:null,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}],&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ee411a9"
                                            data-id="ee411a9" data-element_type="column"
                                            style="max-width:100%;margin-top:50px;">
                                            {!! $data_setting[0]['link_th'] !!}
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7096027"
                                            data-id="7096027" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">

                                                    <div class="elementor-element elementor-element-3e76fa27 elementor-widget elementor-widget-heading"
                                                        data-id="3e76fa27" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container"><br>
                                                            {!! $data_setting[0]['description_th'] !!}
                                                        </div>
                                                    </div>

                                                    <!--  -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-b1fe580 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="b1fe580" data-element_type="section"
                                data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;3e16bd6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-731414d"
                                            data-id="731414d" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-517f8dd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="517f8dd" data-element_type="section"
                                                        data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;0d382a6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-90b71c0"
                                                                    data-id="90b71c0" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-6e6250f elementor-widget elementor-widget-spacer"
                                                                                data-id="6e6250f"
                                                                                data-element_type="widget"
                                                                                data-widget_type="spacer.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-spacer">
                                                                                        <div class="elementor-spacer-inner">
                                                                                        @if(isset($data_setting[0]['text_zodiac_th']))
                                                                                            {!! $data_setting[0]['text_zodiac_th'] !!}
                                                                                        @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-bb37020 zodiac-sign-wrapper elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="bb37020" data-element_type="section"
                                                        data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;0d382a6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                @if(isset($data_zodiac))
                                                                <?php $i=1; ?>
                                                                @foreach($data_zodiac as $item)
                                                                <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-67de41b dt-col-sm-4"
                                                                    data-id="67de41b" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-f597090 aligncenter elementor-widget elementor-widget-dt-iconbox"
                                                                                data-id="f597090"
                                                                                data-element_type="widget"
                                                                                data-widget_type="dt-iconbox.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="dt-sc-iconbox-wrapper ">
                                                                                        <div style="margin:20px 0px;"
                                                                                            class="dt-sc-iconbox-container">
                                                                                            <div class="iconbox-bg"><img
                                                                                                    decoding="async"
                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/zodiac-bg<?php echo $i; ?>.png"
                                                                                                    alt="20756" /></div>
                                                                                            <img decoding="async"
                                                                                                src="/augury_template/storage/app/public/images/rasi/{{ $item->rasi_image}}" alt="{{ $item->rasi_name_th}}"
                                                                                                alt="20877" />
                                                                                            <div class="iconbox-hover">
                                                                                                <img decoding="async"
                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/zodiac-bg<?php echo $i; ?>-1.png"
                                                                                                    alt="20757" style="z-index: 9; filter: drop-shadow(2px 4px 6px black);" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="dt-sc-iconbox-description">
                                                                                            <h5>
                                                                                                <a href="https://dtaugury.wpengine.com/forecast/aries/"
                                                                                                    title="Aries">
                                                                                                    {!! app()->getLocale()=='th'? $item->rasi_name_th : $item->rasi_name_ch !!}
                                                                                            </a>
                                                                                            </h5>
                                                                                            <!-- <h4>Apr 05-May 20</h4> -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php $i++; ?>
                                                                @endforeach
                                                                @endif
                                                                <!-- <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-a2f5f89 dt-col-sm-4"
                                                                    data-id="a2f5f89" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-b506093 aligncenter elementor-widget elementor-widget-dt-iconbox"
                                                                                data-id="b506093"
                                                                                data-element_type="widget"
                                                                                data-widget_type="dt-iconbox.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="dt-sc-iconbox-wrapper ">
                                                                                        <div
                                                                                            class="dt-sc-iconbox-container">
                                                                                            <div class="iconbox-bg"><img
                                                                                                    decoding="async"
                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/zodiac-bg2.png"
                                                                                                    alt="20854" /></div>
                                                                                            <img decoding="async"
                                                                                                src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/zodiac-icon2.png"
                                                                                                alt="20878" />
                                                                                            <div class="iconbox-hover">
                                                                                                <img decoding="async"
                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/zodiac-bg2-1.png"
                                                                                                    alt="20855" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="dt-sc-iconbox-description">
                                                                                            <h3><a href="https://dtaugury.wpengine.com/forecast/taurus/"
                                                                                                    title="Taurus">Taurus</a>
                                                                                            </h3>
                                                                                            <h4>Jan 12-Feb 17</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->

                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-d775afc our-services-section elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="d775afc" data-element_type="section" style="margin:50px 0px;"
                                data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;3e16bd6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                <div class="elementor-container elementor-column-gap-extended">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f0ff0de"
                                            data-id="f0ff0de" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">

                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-d676024 title-bottom-content-wrapper elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="d676024" data-element_type="section"
                                                        data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;0d382a6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9f206e3"
                                                                    data-id="9f206e3" data-element_type="column">
                                                                    <div class="elementor-column-wrap">
                                                                        <div class="elementor-widget-wrap">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f394de4"
                                                                    data-id="f394de4" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-aee2470 elementor-widget elementor-widget-text-editor"
                                                                                data-id="aee2470"
                                                                                data-element_type="widget"
                                                                                data-widget_type="text-editor.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div
                                                                                        class="elementor-text-editor elementor-clearfix">
                                                                                        @if(isset($data_setting[0]['text_service_th']))
                                                                                            {!! $data_setting[0]['text_service_th'] !!}
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ced742d"
                                                                    data-id="ced742d" data-element_type="column">
                                                                    <div class="elementor-column-wrap">
                                                                        <div class="elementor-widget-wrap">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div class="elementor-element elementor-element-18d4521 elementor-widget elementor-widget-dt-advanced-carousel is-mac"
                                                        data-id="18d4521" data-element_type="widget"
                                                        data-settings="{&quot;dot_style&quot;:&quot;slick-dots style-4&quot;,&quot;slider_type&quot;:&quot;horizontal&quot;,&quot;slide_to_scroll&quot;:&quot;single&quot;,&quot;infinite_loop&quot;:&quot;yes&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;draggable&quot;:&quot;yes&quot;,&quot;touch_move&quot;:&quot;yes&quot;,&quot;adaptive_height&quot;:&quot;yes&quot;,&quot;pauseohover&quot;:&quot;yes&quot;,&quot;navigation&quot;:&quot;yes&quot;}"
                                                        data-widget_type="dt-advanced-carousel.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="dt-advanced-carousel-wrapper slick-initialized slick-slider slick-dotted"
                                                                data-settings="{&quot;centerMode&quot;:false,&quot;adaptiveHeight&quot;:true,&quot;arrows&quot;:false,&quot;autoplay&quot;:true,&quot;dots&quot;:true,&quot;dotsClass&quot;:&quot;slick-dots style-4&quot;,&quot;draggable&quot;:true,&quot;swipe&quot;:true,&quot;infinite&quot;:true,&quot;pauseOnDotsHover&quot;:true,&quot;pauseOnFocus&quot;:false,&quot;pauseOnHover&quot;:true,&quot;slidesToScroll&quot;:1,&quot;slidesToShow&quot;:3,&quot;speed&quot;:300,&quot;touchMove&quot;:true,&quot;vertical&quot;:false,&quot;desktopSlidesToShow&quot;:3,&quot;desktopSlidesToScroll&quot;:1,&quot;tabletSlidesToShow&quot;:null,&quot;tabletSlidesToScroll&quot;:1,&quot;mobileSlidesToShow&quot;:null,&quot;mobileSlidesToScroll&quot;:1}">
                                                                <div class="slick-list draggable">
                                                                    <div class="slick-track"
                                                                        style="opacity: 1; width: 4510px; transform: translate3d(-1640px, 0px, 0px);">
                                                                        <div class="dt-advanced-carousel-item-wrapper slick-slide slick-cloned"
                                                                            data-slick-index="-3" id=""
                                                                            aria-hidden="true" style="width: 380px;"
                                                                            tabindex="-1">
                                                                            <div data-elementor-type="page"
                                                                                data-elementor-id="25218"
                                                                                class="elementor elementor-25218">
                                                                                <div class="elementor-inner">
                                                                                    <div class="elementor-section-wrap">
                                                                                        <section
                                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-39a37cc8 our-services-box elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                            data-id="39a37cc8"
                                                                                            data-element_type="section"
                                                                                            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;7ee6690&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                                                                            <div
                                                                                                class="elementor-container elementor-column-gap-default">
                                                                                                <div
                                                                                                    class="elementor-row">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581d7ade"
                                                                                                        data-id="581d7ade"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-73dfe88f dt-sc-smooth-transition elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                                                                                                    data-id="73dfe88f"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image-box.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-image-box-wrapper">
                                                                                                                            <figure
                                                                                                                                class="elementor-image-box-img">
                                                                                                                                <img decoding="async"
                                                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/services-icon2.png"
                                                                                                                                    title="services-icon2"
                                                                                                                                    alt="services-icon2"
                                                                                                                                    loading="lazy">
                                                                                                                            </figure>
                                                                                                                            <div
                                                                                                                                class="elementor-image-box-content">
                                                                                                                                <h3
                                                                                                                                    class="elementor-image-box-title">
                                                                                                                                    Kundli
                                                                                                                                    Dosha
                                                                                                                                </h3>
                                                                                                                                <p
                                                                                                                                    class="elementor-image-box-description">
                                                                                                                                    Contrary
                                                                                                                                    to
                                                                                                                                    popular
                                                                                                                                    belief,
                                                                                                                                    Lorem
                                                                                                                                    Ipsum
                                                                                                                                    is
                                                                                                                                    not
                                                                                                                                    simply
                                                                                                                                    random
                                                                                                                                    text
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-7011684d elementor-align-center elementor-widget elementor-widget-button"
                                                                                                                    data-id="7011684d"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper">
                                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                                href="https://dtaugury.wpengine.com/our-services/daily-horoscope/"
                                                                                                                                tabindex="-1">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text">View
                                                                                                                                        More</span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </section>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-advanced-carousel-item-wrapper slick-slide slick-cloned"
                                                                            data-slick-index="-2" id=""
                                                                            aria-hidden="true" style="width: 380px;"
                                                                            tabindex="-1">
                                                                            <div data-elementor-type="page"
                                                                                data-elementor-id="25219"
                                                                                class="elementor elementor-25219">
                                                                                <div class="elementor-inner">
                                                                                    <div class="elementor-section-wrap">
                                                                                        <section
                                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-39a37cc8 our-services-box elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                            data-id="39a37cc8"
                                                                                            data-element_type="section"
                                                                                            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;7ee6690&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                                                                            <div
                                                                                                class="elementor-container elementor-column-gap-default">
                                                                                                <div
                                                                                                    class="elementor-row">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581d7ade"
                                                                                                        data-id="581d7ade"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-73dfe88f dt-sc-smooth-transition elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                                                                                                    data-id="73dfe88f"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image-box.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-image-box-wrapper">
                                                                                                                            <figure
                                                                                                                                class="elementor-image-box-img">
                                                                                                                                <img decoding="async"
                                                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/services-icon3.png"
                                                                                                                                    title="services-icon3"
                                                                                                                                    alt="services-icon3"
                                                                                                                                    loading="lazy">
                                                                                                                            </figure>
                                                                                                                            <div
                                                                                                                                class="elementor-image-box-content">
                                                                                                                                <h3
                                                                                                                                    class="elementor-image-box-title">
                                                                                                                                    Face
                                                                                                                                    Reading
                                                                                                                                </h3>
                                                                                                                                <p
                                                                                                                                    class="elementor-image-box-description">
                                                                                                                                    Contrary
                                                                                                                                    to
                                                                                                                                    popular
                                                                                                                                    belief,
                                                                                                                                    Lorem
                                                                                                                                    Ipsum
                                                                                                                                    is
                                                                                                                                    not
                                                                                                                                    simply
                                                                                                                                    random
                                                                                                                                    text
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-7011684d elementor-align-center elementor-widget elementor-widget-button"
                                                                                                                    data-id="7011684d"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper">
                                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                                href="https://dtaugury.wpengine.com/our-services/kundli-dosha/"
                                                                                                                                tabindex="-1">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text">View
                                                                                                                                        More</span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </section>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-advanced-carousel-item-wrapper slick-slide slick-cloned"
                                                                            data-slick-index="-1" id=""
                                                                            aria-hidden="true" style="width: 380px;"
                                                                            tabindex="-1">
                                                                            <div data-elementor-type="page"
                                                                                data-elementor-id="25220"
                                                                                class="elementor elementor-25220">
                                                                                <div class="elementor-inner">
                                                                                    <div class="elementor-section-wrap">
                                                                                        <section
                                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-39a37cc8 our-services-box elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                            data-id="39a37cc8"
                                                                                            data-element_type="section"
                                                                                            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;7ee6690&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                                                                            <div
                                                                                                class="elementor-container elementor-column-gap-default">
                                                                                                <div
                                                                                                    class="elementor-row">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581d7ade"
                                                                                                        data-id="581d7ade"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-73dfe88f dt-sc-smooth-transition elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                                                                                                    data-id="73dfe88f"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image-box.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-image-box-wrapper">
                                                                                                                            <figure
                                                                                                                                class="elementor-image-box-img">
                                                                                                                                <img decoding="async"
                                                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/services-icon4.png"
                                                                                                                                    title="services-icon4"
                                                                                                                                    alt="services-icon4"
                                                                                                                                    loading="lazy">
                                                                                                                            </figure>
                                                                                                                            <div
                                                                                                                                class="elementor-image-box-content">
                                                                                                                                <h3
                                                                                                                                    class="elementor-image-box-title">
                                                                                                                                    Daily
                                                                                                                                    Horoscope
                                                                                                                                </h3>
                                                                                                                                <p
                                                                                                                                    class="elementor-image-box-description">
                                                                                                                                    Contrary
                                                                                                                                    to
                                                                                                                                    popular
                                                                                                                                    belief,
                                                                                                                                    Lorem
                                                                                                                                    Ipsum
                                                                                                                                    is
                                                                                                                                    not
                                                                                                                                    simply
                                                                                                                                    random
                                                                                                                                    text
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-7011684d elementor-align-center elementor-widget elementor-widget-button"
                                                                                                                    data-id="7011684d"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper">
                                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                                href="https://dtaugury.wpengine.com/our-services/face-reading/"
                                                                                                                                tabindex="-1">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text">View
                                                                                                                                        More</span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </section>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-advanced-carousel-item-wrapper slick-slide"
                                                                            data-slick-index="0" aria-hidden="true"
                                                                            style="width: 380px;" tabindex="-1"
                                                                            role="tabpanel" id="slick-slide00"
                                                                            aria-describedby="slick-slide-control00">
                                                                            <div data-elementor-type="page"
                                                                                data-elementor-id="20488"
                                                                                class="elementor elementor-20488">
                                                                                <div class="elementor-inner">
                                                                                    <div class="elementor-section-wrap">
                                                                                        <section
                                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-39a37cc8 our-services-box elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                                                                            data-id="39a37cc8"
                                                                                            data-element_type="section"
                                                                                            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;7ee6690&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                                                                            <div
                                                                                                class="jet-parallax-section__layout elementor-repeater-item-7ee6690 jet-parallax-section__scroll-layout is-mac">
                                                                                                <div class="jet-parallax-section__image"
                                                                                                    style="background-position: 50% 50%; background-image: url(&quot;&quot;);">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="elementor-container elementor-column-gap-default">
                                                                                                <div
                                                                                                    class="elementor-row">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581d7ade"
                                                                                                        data-id="581d7ade"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-73dfe88f dt-sc-smooth-transition elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box is-mac"
                                                                                                                    data-id="73dfe88f"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image-box.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-image-box-wrapper">
                                                                                                                            <figure
                                                                                                                                class="elementor-image-box-img">
                                                                                                                                <img decoding="async"
                                                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/01/services-icon1.png"
                                                                                                                                    title="services-icon1"
                                                                                                                                    alt="services-icon1"
                                                                                                                                    loading="lazy">
                                                                                                                            </figure>
                                                                                                                            <div
                                                                                                                                class="elementor-image-box-content">
                                                                                                                                <h3
                                                                                                                                    class="elementor-image-box-title">
                                                                                                                                    Personal
                                                                                                                                    Consultation
                                                                                                                                </h3>
                                                                                                                                <p
                                                                                                                                    class="elementor-image-box-description">
                                                                                                                                    Contrary
                                                                                                                                    to
                                                                                                                                    popular
                                                                                                                                    belief,
                                                                                                                                    Lorem
                                                                                                                                    Ipsum
                                                                                                                                    is
                                                                                                                                    not
                                                                                                                                    simply
                                                                                                                                    random
                                                                                                                                    text
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-7011684d elementor-align-center elementor-widget elementor-widget-button is-mac"
                                                                                                                    data-id="7011684d"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper">
                                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                                href="https://dtaugury.wpengine.com/our-services/personal-consultation/"
                                                                                                                                tabindex="-1">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text">View
                                                                                                                                        More</span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </section>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-advanced-carousel-item-wrapper slick-slide slick-current slick-active"
                                                                            data-slick-index="1" aria-hidden="false"
                                                                            style="width: 380px;" tabindex="0"
                                                                            role="tabpanel" id="slick-slide01"
                                                                            aria-describedby="slick-slide-control01">
                                                                            <div data-elementor-type="page"
                                                                                data-elementor-id="25218"
                                                                                class="elementor elementor-25218">
                                                                                <div class="elementor-inner">
                                                                                    <div class="elementor-section-wrap">
                                                                                        <section
                                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-39a37cc8 our-services-box elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                                                                            data-id="39a37cc8"
                                                                                            data-element_type="section"
                                                                                            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;7ee6690&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                                                                            <div
                                                                                                class="jet-parallax-section__layout elementor-repeater-item-7ee6690 jet-parallax-section__scroll-layout is-mac">
                                                                                                <div class="jet-parallax-section__image"
                                                                                                    style="background-position: 50% 50%; background-image: url(&quot;&quot;);">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="elementor-container elementor-column-gap-default">
                                                                                                <div
                                                                                                    class="elementor-row">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581d7ade"
                                                                                                        data-id="581d7ade"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-73dfe88f dt-sc-smooth-transition elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box is-mac"
                                                                                                                    data-id="73dfe88f"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image-box.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-image-box-wrapper">
                                                                                                                            <figure
                                                                                                                                class="elementor-image-box-img">
                                                                                                                                <img decoding="async"
                                                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/services-icon2.png"
                                                                                                                                    title="services-icon2"
                                                                                                                                    alt="services-icon2"
                                                                                                                                    loading="lazy">
                                                                                                                            </figure>
                                                                                                                            <div
                                                                                                                                class="elementor-image-box-content">
                                                                                                                                <h3
                                                                                                                                    class="elementor-image-box-title">
                                                                                                                                    Kundli
                                                                                                                                    Dosha
                                                                                                                                </h3>
                                                                                                                                <p
                                                                                                                                    class="elementor-image-box-description">
                                                                                                                                    Contrary
                                                                                                                                    to
                                                                                                                                    popular
                                                                                                                                    belief,
                                                                                                                                    Lorem
                                                                                                                                    Ipsum
                                                                                                                                    is
                                                                                                                                    not
                                                                                                                                    simply
                                                                                                                                    random
                                                                                                                                    text
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-7011684d elementor-align-center elementor-widget elementor-widget-button is-mac"
                                                                                                                    data-id="7011684d"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper">
                                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                                href="https://dtaugury.wpengine.com/our-services/daily-horoscope/"
                                                                                                                                tabindex="0">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text">View
                                                                                                                                        More</span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </section>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-advanced-carousel-item-wrapper slick-slide slick-active"
                                                                            data-slick-index="2" aria-hidden="false"
                                                                            style="width: 380px;" tabindex="0"
                                                                            role="tabpanel" id="slick-slide02"
                                                                            aria-describedby="slick-slide-control02">
                                                                            <div data-elementor-type="page"
                                                                                data-elementor-id="25219"
                                                                                class="elementor elementor-25219">
                                                                                <div class="elementor-inner">
                                                                                    <div class="elementor-section-wrap">
                                                                                        <section
                                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-39a37cc8 our-services-box elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                                                                            data-id="39a37cc8"
                                                                                            data-element_type="section"
                                                                                            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;7ee6690&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                                                                            <div
                                                                                                class="jet-parallax-section__layout elementor-repeater-item-7ee6690 jet-parallax-section__scroll-layout is-mac">
                                                                                                <div class="jet-parallax-section__image"
                                                                                                    style="background-position: 50% 50%; background-image: url(&quot;&quot;);">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="elementor-container elementor-column-gap-default">
                                                                                                <div
                                                                                                    class="elementor-row">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581d7ade"
                                                                                                        data-id="581d7ade"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-73dfe88f dt-sc-smooth-transition elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box is-mac"
                                                                                                                    data-id="73dfe88f"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image-box.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-image-box-wrapper">
                                                                                                                            <figure
                                                                                                                                class="elementor-image-box-img">
                                                                                                                                <img decoding="async"
                                                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/services-icon3.png"
                                                                                                                                    title="services-icon3"
                                                                                                                                    alt="services-icon3"
                                                                                                                                    loading="lazy">
                                                                                                                            </figure>
                                                                                                                            <div
                                                                                                                                class="elementor-image-box-content">
                                                                                                                                <h3
                                                                                                                                    class="elementor-image-box-title">
                                                                                                                                    Face
                                                                                                                                    Reading
                                                                                                                                </h3>
                                                                                                                                <p
                                                                                                                                    class="elementor-image-box-description">
                                                                                                                                    Contrary
                                                                                                                                    to
                                                                                                                                    popular
                                                                                                                                    belief,
                                                                                                                                    Lorem
                                                                                                                                    Ipsum
                                                                                                                                    is
                                                                                                                                    not
                                                                                                                                    simply
                                                                                                                                    random
                                                                                                                                    text
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-7011684d elementor-align-center elementor-widget elementor-widget-button is-mac"
                                                                                                                    data-id="7011684d"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper">
                                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                                href="https://dtaugury.wpengine.com/our-services/kundli-dosha/"
                                                                                                                                tabindex="0">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text">View
                                                                                                                                        More</span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </section>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-advanced-carousel-item-wrapper slick-slide slick-active"
                                                                            data-slick-index="3" aria-hidden="false"
                                                                            style="width: 380px;" tabindex="0"
                                                                            role="tabpanel" id="slick-slide03"
                                                                            aria-describedby="slick-slide-control03">
                                                                            <div data-elementor-type="page"
                                                                                data-elementor-id="25220"
                                                                                class="elementor elementor-25220">
                                                                                <div class="elementor-inner">
                                                                                    <div class="elementor-section-wrap">
                                                                                        <section
                                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-39a37cc8 our-services-box elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                                                                            data-id="39a37cc8"
                                                                                            data-element_type="section"
                                                                                            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;7ee6690&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                                                                            <div
                                                                                                class="jet-parallax-section__layout elementor-repeater-item-7ee6690 jet-parallax-section__scroll-layout is-mac">
                                                                                                <div class="jet-parallax-section__image"
                                                                                                    style="background-position: 50% 50%; background-image: url(&quot;&quot;);">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="elementor-container elementor-column-gap-default">
                                                                                                <div
                                                                                                    class="elementor-row">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581d7ade"
                                                                                                        data-id="581d7ade"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-73dfe88f dt-sc-smooth-transition elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box is-mac"
                                                                                                                    data-id="73dfe88f"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image-box.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-image-box-wrapper">
                                                                                                                            <figure
                                                                                                                                class="elementor-image-box-img">
                                                                                                                                <img decoding="async"
                                                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/services-icon4.png"
                                                                                                                                    title="services-icon4"
                                                                                                                                    alt="services-icon4"
                                                                                                                                    loading="lazy">
                                                                                                                            </figure>
                                                                                                                            <div
                                                                                                                                class="elementor-image-box-content">
                                                                                                                                <h3
                                                                                                                                    class="elementor-image-box-title">
                                                                                                                                    Daily
                                                                                                                                    Horoscope
                                                                                                                                </h3>
                                                                                                                                <p
                                                                                                                                    class="elementor-image-box-description">
                                                                                                                                    Contrary
                                                                                                                                    to
                                                                                                                                    popular
                                                                                                                                    belief,
                                                                                                                                    Lorem
                                                                                                                                    Ipsum
                                                                                                                                    is
                                                                                                                                    not
                                                                                                                                    simply
                                                                                                                                    random
                                                                                                                                    text
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-7011684d elementor-align-center elementor-widget elementor-widget-button is-mac"
                                                                                                                    data-id="7011684d"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper">
                                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                                href="https://dtaugury.wpengine.com/our-services/face-reading/"
                                                                                                                                tabindex="0">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text">View
                                                                                                                                        More</span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </section>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-advanced-carousel-item-wrapper slick-slide slick-cloned"
                                                                            data-slick-index="4" id=""
                                                                            aria-hidden="true" style="width: 380px;"
                                                                            tabindex="-1">
                                                                            <div data-elementor-type="page"
                                                                                data-elementor-id="20488"
                                                                                class="elementor elementor-20488">
                                                                                <div class="elementor-inner">
                                                                                    <div class="elementor-section-wrap">
                                                                                        <section
                                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-39a37cc8 our-services-box elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                            data-id="39a37cc8"
                                                                                            data-element_type="section"
                                                                                            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;7ee6690&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                                                                            <div
                                                                                                class="elementor-container elementor-column-gap-default">
                                                                                                <div
                                                                                                    class="elementor-row">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581d7ade"
                                                                                                        data-id="581d7ade"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-73dfe88f dt-sc-smooth-transition elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                                                                                                    data-id="73dfe88f"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image-box.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-image-box-wrapper">
                                                                                                                            <figure
                                                                                                                                class="elementor-image-box-img">
                                                                                                                                <img decoding="async"
                                                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/01/services-icon1.png"
                                                                                                                                    title="services-icon1"
                                                                                                                                    alt="services-icon1"
                                                                                                                                    loading="lazy">
                                                                                                                            </figure>
                                                                                                                            <div
                                                                                                                                class="elementor-image-box-content">
                                                                                                                                <h3
                                                                                                                                    class="elementor-image-box-title">
                                                                                                                                    Personal
                                                                                                                                    Consultation
                                                                                                                                </h3>
                                                                                                                                <p
                                                                                                                                    class="elementor-image-box-description">
                                                                                                                                    Contrary
                                                                                                                                    to
                                                                                                                                    popular
                                                                                                                                    belief,
                                                                                                                                    Lorem
                                                                                                                                    Ipsum
                                                                                                                                    is
                                                                                                                                    not
                                                                                                                                    simply
                                                                                                                                    random
                                                                                                                                    text
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-7011684d elementor-align-center elementor-widget elementor-widget-button"
                                                                                                                    data-id="7011684d"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper">
                                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                                href="https://dtaugury.wpengine.com/our-services/personal-consultation/"
                                                                                                                                tabindex="-1">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text">View
                                                                                                                                        More</span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </section>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-advanced-carousel-item-wrapper slick-slide slick-cloned"
                                                                            data-slick-index="5" id=""
                                                                            aria-hidden="true" style="width: 380px;"
                                                                            tabindex="-1">
                                                                            <div data-elementor-type="page"
                                                                                data-elementor-id="25218"
                                                                                class="elementor elementor-25218">
                                                                                <div class="elementor-inner">
                                                                                    <div class="elementor-section-wrap">
                                                                                        <section
                                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-39a37cc8 our-services-box elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                            data-id="39a37cc8"
                                                                                            data-element_type="section"
                                                                                            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;7ee6690&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                                                                            <div
                                                                                                class="elementor-container elementor-column-gap-default">
                                                                                                <div
                                                                                                    class="elementor-row">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581d7ade"
                                                                                                        data-id="581d7ade"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-73dfe88f dt-sc-smooth-transition elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                                                                                                    data-id="73dfe88f"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image-box.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-image-box-wrapper">
                                                                                                                            <figure
                                                                                                                                class="elementor-image-box-img">
                                                                                                                                <img decoding="async"
                                                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/services-icon2.png"
                                                                                                                                    title="services-icon2"
                                                                                                                                    alt="services-icon2"
                                                                                                                                    loading="lazy">
                                                                                                                            </figure>
                                                                                                                            <div
                                                                                                                                class="elementor-image-box-content">
                                                                                                                                <h3
                                                                                                                                    class="elementor-image-box-title">
                                                                                                                                    Kundli
                                                                                                                                    Dosha
                                                                                                                                </h3>
                                                                                                                                <p
                                                                                                                                    class="elementor-image-box-description">
                                                                                                                                    Contrary
                                                                                                                                    to
                                                                                                                                    popular
                                                                                                                                    belief,
                                                                                                                                    Lorem
                                                                                                                                    Ipsum
                                                                                                                                    is
                                                                                                                                    not
                                                                                                                                    simply
                                                                                                                                    random
                                                                                                                                    text
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-7011684d elementor-align-center elementor-widget elementor-widget-button"
                                                                                                                    data-id="7011684d"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper">
                                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                                href="https://dtaugury.wpengine.com/our-services/daily-horoscope/"
                                                                                                                                tabindex="-1">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text">View
                                                                                                                                        More</span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </section>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-advanced-carousel-item-wrapper slick-slide slick-cloned"
                                                                            data-slick-index="6" id=""
                                                                            aria-hidden="true" style="width: 380px;"
                                                                            tabindex="-1">
                                                                            <div data-elementor-type="page"
                                                                                data-elementor-id="25219"
                                                                                class="elementor elementor-25219">
                                                                                <div class="elementor-inner">
                                                                                    <div class="elementor-section-wrap">
                                                                                        <section
                                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-39a37cc8 our-services-box elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                            data-id="39a37cc8"
                                                                                            data-element_type="section"
                                                                                            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;7ee6690&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                                                                            <div
                                                                                                class="elementor-container elementor-column-gap-default">
                                                                                                <div
                                                                                                    class="elementor-row">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581d7ade"
                                                                                                        data-id="581d7ade"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-73dfe88f dt-sc-smooth-transition elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                                                                                                    data-id="73dfe88f"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image-box.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-image-box-wrapper">
                                                                                                                            <figure
                                                                                                                                class="elementor-image-box-img">
                                                                                                                                <img decoding="async"
                                                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/services-icon3.png"
                                                                                                                                    title="services-icon3"
                                                                                                                                    alt="services-icon3"
                                                                                                                                    loading="lazy">
                                                                                                                            </figure>
                                                                                                                            <div
                                                                                                                                class="elementor-image-box-content">
                                                                                                                                <h3
                                                                                                                                    class="elementor-image-box-title">
                                                                                                                                    Face
                                                                                                                                    Reading
                                                                                                                                </h3>
                                                                                                                                <p
                                                                                                                                    class="elementor-image-box-description">
                                                                                                                                    Contrary
                                                                                                                                    to
                                                                                                                                    popular
                                                                                                                                    belief,
                                                                                                                                    Lorem
                                                                                                                                    Ipsum
                                                                                                                                    is
                                                                                                                                    not
                                                                                                                                    simply
                                                                                                                                    random
                                                                                                                                    text
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-7011684d elementor-align-center elementor-widget elementor-widget-button"
                                                                                                                    data-id="7011684d"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper">
                                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                                href="https://dtaugury.wpengine.com/our-services/kundli-dosha/"
                                                                                                                                tabindex="-1">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text">View
                                                                                                                                        More</span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </section>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dt-advanced-carousel-item-wrapper slick-slide slick-cloned"
                                                                            data-slick-index="7" id=""
                                                                            aria-hidden="true" style="width: 380px;"
                                                                            tabindex="-1">
                                                                            <div data-elementor-type="page"
                                                                                data-elementor-id="25220"
                                                                                class="elementor elementor-25220">
                                                                                <div class="elementor-inner">
                                                                                    <div class="elementor-section-wrap">
                                                                                        <section
                                                                                            class="elementor-section elementor-top-section elementor-element elementor-element-39a37cc8 our-services-box elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                                                            data-id="39a37cc8"
                                                                                            data-element_type="section"
                                                                                            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;7ee6690&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                                                                            <div
                                                                                                class="elementor-container elementor-column-gap-default">
                                                                                                <div
                                                                                                    class="elementor-row">
                                                                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581d7ade"
                                                                                                        data-id="581d7ade"
                                                                                                        data-element_type="column">
                                                                                                        <div
                                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                                            <div
                                                                                                                class="elementor-widget-wrap">
                                                                                                                <div class="elementor-element elementor-element-73dfe88f dt-sc-smooth-transition elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                                                                                                    data-id="73dfe88f"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="image-box.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-image-box-wrapper">
                                                                                                                            <figure
                                                                                                                                class="elementor-image-box-img">
                                                                                                                                <img decoding="async"
                                                                                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/services-icon4.png"
                                                                                                                                    title="services-icon4"
                                                                                                                                    alt="services-icon4"
                                                                                                                                    loading="lazy">
                                                                                                                            </figure>
                                                                                                                            <div
                                                                                                                                class="elementor-image-box-content">
                                                                                                                                <h3
                                                                                                                                    class="elementor-image-box-title">
                                                                                                                                    Daily
                                                                                                                                    Horoscope
                                                                                                                                </h3>
                                                                                                                                <p
                                                                                                                                    class="elementor-image-box-description">
                                                                                                                                    Contrary
                                                                                                                                    to
                                                                                                                                    popular
                                                                                                                                    belief,
                                                                                                                                    Lorem
                                                                                                                                    Ipsum
                                                                                                                                    is
                                                                                                                                    not
                                                                                                                                    simply
                                                                                                                                    random
                                                                                                                                    text
                                                                                                                                </p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="elementor-element elementor-element-7011684d elementor-align-center elementor-widget elementor-widget-button"
                                                                                                                    data-id="7011684d"
                                                                                                                    data-element_type="widget"
                                                                                                                    data-widget_type="button.default">
                                                                                                                    <div
                                                                                                                        class="elementor-widget-container">
                                                                                                                        <div
                                                                                                                            class="elementor-button-wrapper">
                                                                                                                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                                                                                href="https://dtaugury.wpengine.com/our-services/face-reading/"
                                                                                                                                tabindex="-1">
                                                                                                                                <span
                                                                                                                                    class="elementor-button-content-wrapper">
                                                                                                                                    <span
                                                                                                                                        class="elementor-button-text">View
                                                                                                                                        More</span>
                                                                                                                                </span>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </section>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="slick-dots style-4" style="" role="tablist">
                                                                    <li class="" role="presentation"><button
                                                                            type="button" role="tab"
                                                                            id="slick-slide-control00"
                                                                            aria-controls="slick-slide00"
                                                                            aria-label="1 of 2" tabindex="-1">1</button>
                                                                    </li>
                                                                    <li role="presentation" class="slick-active"><button
                                                                            type="button" role="tab"
                                                                            id="slick-slide-control01"
                                                                            aria-controls="slick-slide01"
                                                                            aria-label="2 of 2" tabindex="0"
                                                                            aria-selected="true">2</button></li>
                                                                    <li role="presentation" class=""><button
                                                                            type="button" role="tab"
                                                                            id="slick-slide-control02"
                                                                            aria-controls="slick-slide02"
                                                                            aria-label="3 of 2" tabindex="-1">3</button>
                                                                    </li>
                                                                    <li role="presentation" class=""><button
                                                                            type="button" role="tab"
                                                                            id="slick-slide-control03"
                                                                            aria-controls="slick-slide03"
                                                                            aria-label="4 of 2" tabindex="-1">4</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-49cd422 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="49cd422" data-element_type="section"
                                data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;3e16bd6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ec4683"
                                            data-id="1ec4683" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-89cdf1b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="89cdf1b" data-element_type="section"
                                                        data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;0d382a6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d266688"
                                                                    data-id="d266688" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-eb1c940 dt-skin-secondary-color elementor-widget elementor-widget-heading"
                                                                                data-id="eb1c940"
                                                                                data-element_type="widget"
                                                                                data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h4 class="elementor-heading-title elementor-size-default">
                                                                                        Lorem Ipsum
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-0d163bb elementor-widget elementor-widget-heading"
                                                                                data-id="0d163bb"
                                                                                data-element_type="widget"
                                                                                data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2
                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                        Best Books Form Our Author</h2>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-c2e23a4 title-bottom-content-wrapper elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="c2e23a4" data-element_type="section"
                                                        data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;0d382a6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-833e489"
                                                                    data-id="833e489" data-element_type="column">
                                                                    <div class="elementor-column-wrap">
                                                                        <div class="elementor-widget-wrap">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3d0ed4f"
                                                                    data-id="3d0ed4f" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-8d3d6c6 elementor-widget elementor-widget-text-editor"
                                                                                data-id="8d3d6c6"
                                                                                data-element_type="widget"
                                                                                data-widget_type="text-editor.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div
                                                                                        class="elementor-text-editor elementor-clearfix">
                                                                                        <p>Lorem ipsum dolor sit amet,
                                                                                            consectetur adipiscing elit,
                                                                                            sed do eiusmod tempor Lorem
                                                                                            ipsum dolor sit..</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7ffe8d9"
                                                                    data-id="7ffe8d9" data-element_type="column">
                                                                    <div class="elementor-column-wrap">
                                                                        <div class="elementor-widget-wrap">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-8b666af elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="8b666af" data-element_type="section"
                                                        data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;0d382a6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-357a8f8"
                                                                    data-id="357a8f8" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-5d61aa1 elementor-widget elementor-widget-dt-shop-products"
                                                                                data-id="5d61aa1"
                                                                                data-element_type="widget"
                                                                                data-widget_type="dt-shop-products.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div
                                                                                        class="dt-sc-products-container woocommerce  ">
                                                                                        <ul
                                                                                            class="products  product-style-default dt-augury-default  product-overlay-dark-bgcolor product-overlay-gradientbottomtotop product-hover-secimage-fade product-border-type-thumb product-border-position-default  product-padding-content product-with-space product-label-boxed product-thumb-alignment-bottom product-thumb-iconsgroup-style-brdrfill-rounded product-thumb-buttonelement-style-simple  product-content-alignment-center product-content-iconsgroup-style-simple product-content-buttonelement-style-brdrfill-rounded ">
                                                                                            <li
                                                                                                class="product-grid-view product type-product post-20799 status-publish first instock product_cat-clothing has-post-thumbnail shipping-taxable product-type-simple">
                                                                                                <div
                                                                                                    class="dt-col dt-col-xs-12 dt-col-sm-6 dt-col-md-6 dt-col-qxlg-4 dt-col-hxlg-3 dt-col-lg-3">
                                                                                                    <div
                                                                                                        class="product-wrapper">
                                                                                                        <div
                                                                                                            class="product-thumb">
                                                                                                            <a class="image"
                                                                                                                href="https://dtaugury.wpengine.com/product/secret-in-the-north/"
                                                                                                                title="Secret in the North">
                                                                                                                <div
                                                                                                                    class="product-thumb-overlay">
                                                                                                                </div>
                                                                                                                <div class="primary-image"
                                                                                                                    style="background-image:url(https://dtaugury.wpengine.com/wp-content/uploads/2020/02/shop-6.jpg)">
                                                                                                                </div>
                                                                                                            </a>
                                                                                                            <div
                                                                                                                class="product-thumb-content">
                                                                                                                <div
                                                                                                                    class="product-buttons-wrapper product-icons">
                                                                                                                    <div
                                                                                                                        class="wc_inline_buttons">
                                                                                                                        <div class="wcwl_btn_wrapper wc_btn_inline"
                                                                                                                            data-tooltip="Wishlist">
                                                                                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-20799  wishlist-fragment on-first-load"
                                                                                                                                data-fragment-ref="20799"
                                                                                                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;20799&quot;,&quot;parent_product_id&quot;:20799,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                                                <!-- ADD TO WISHLIST -->

                                                                                                                                <div
                                                                                                                                    class="yith-wcwl-add-button">
                                                                                                                                    <a href="?add_to_wishlist=20799&#038;_wpnonce=b1013c0c42"
                                                                                                                                        class="add_to_wishlist single_add_to_wishlist"
                                                                                                                                        data-product-id="20799"
                                                                                                                                        data-product-type="simple"
                                                                                                                                        data-original-product-id="20799"
                                                                                                                                        data-title="Add to wishlist"
                                                                                                                                        rel="nofollow">
                                                                                                                                        <span>Add
                                                                                                                                            to
                                                                                                                                            wishlist</span>
                                                                                                                                    </a>
                                                                                                                                </div>

                                                                                                                                <!-- COUNT TEXT -->

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="wccm_btn_wrapper wc_btn_inline"
                                                                                                                            data-tooltip="Compare">
                                                                                                                            <a href="/?action=yith-woocompare-add-product&id=20799"
                                                                                                                                class="button compare yith-woocompare-button"
                                                                                                                                data-product_id="20799"
                                                                                                                                rel="nofollow">Compare</a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="product-details">
                                                                                                            <div
                                                                                                                class="product-title">
                                                                                                                <h5><a
                                                                                                                        href="https://dtaugury.wpengine.com/product/secret-in-the-north/">Secret
                                                                                                                        in
                                                                                                                        the
                                                                                                                        North</a>
                                                                                                                </h5>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="product-buttons-wrapper product-button">
                                                                                                                <div
                                                                                                                    class="wc_inline_buttons">
                                                                                                                    <div class="wcct_btn_wrapper wc_btn_inline"
                                                                                                                        data-tooltip="Add To Cart">
                                                                                                                        <a href="https://dtaugury.wpengine.com/product/secret-in-the-north/"
                                                                                                                            data-quantity="1"
                                                                                                                            class="dt-sc-button too-small button product_type_simple"
                                                                                                                            data-product_id="20799"
                                                                                                                            data-product_sku="logo-collection"
                                                                                                                            aria-label="Read more about &ldquo;Secret in the North&rdquo;"
                                                                                                                            aria-describedby=""
                                                                                                                            rel="nofollow">Read
                                                                                                                            more</a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><a
                                                                                                            href="#"
                                                                                                            class="button yith-wcqv-button"
                                                                                                            data-product_id="20799">Quick
                                                                                                            View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li
                                                                                                class="product-grid-view product type-product post-20797 status-publish instock product_cat-tshirts has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                                                                                <div
                                                                                                    class="dt-col dt-col-xs-12 dt-col-sm-6 dt-col-md-6 dt-col-qxlg-4 dt-col-hxlg-3 dt-col-lg-3">
                                                                                                    <div
                                                                                                        class="product-wrapper">
                                                                                                        <div
                                                                                                            class="product-thumb">
                                                                                                            <a class="image"
                                                                                                                href="https://dtaugury.wpengine.com/product/around-the-universe/"
                                                                                                                title="Around the Universe">
                                                                                                                <div
                                                                                                                    class="product-thumb-overlay">
                                                                                                                </div>
                                                                                                                <div class="primary-image"
                                                                                                                    style="background-image:url(https://dtaugury.wpengine.com/wp-content/uploads/2020/02/shop-11.jpg)">
                                                                                                                </div>
                                                                                                            </a>
                                                                                                            <div
                                                                                                                class="product-thumb-content">
                                                                                                                <div
                                                                                                                    class="product-buttons-wrapper product-icons">
                                                                                                                    <div
                                                                                                                        class="wc_inline_buttons">
                                                                                                                        <div class="wcwl_btn_wrapper wc_btn_inline"
                                                                                                                            data-tooltip="Wishlist">
                                                                                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-20797  wishlist-fragment on-first-load"
                                                                                                                                data-fragment-ref="20797"
                                                                                                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;20797&quot;,&quot;parent_product_id&quot;:20797,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                                                <!-- ADD TO WISHLIST -->

                                                                                                                                <div
                                                                                                                                    class="yith-wcwl-add-button">
                                                                                                                                    <a href="?add_to_wishlist=20797&#038;_wpnonce=b1013c0c42"
                                                                                                                                        class="add_to_wishlist single_add_to_wishlist"
                                                                                                                                        data-product-id="20797"
                                                                                                                                        data-product-type="simple"
                                                                                                                                        data-original-product-id="20797"
                                                                                                                                        data-title="Add to wishlist"
                                                                                                                                        rel="nofollow">
                                                                                                                                        <span>Add
                                                                                                                                            to
                                                                                                                                            wishlist</span>
                                                                                                                                    </a>
                                                                                                                                </div>

                                                                                                                                <!-- COUNT TEXT -->

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="wccm_btn_wrapper wc_btn_inline"
                                                                                                                            data-tooltip="Compare">
                                                                                                                            <a href="/?action=yith-woocompare-add-product&id=20797"
                                                                                                                                class="button compare yith-woocompare-button"
                                                                                                                                data-product_id="20797"
                                                                                                                                rel="nofollow">Compare</a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="product-details">
                                                                                                            <div
                                                                                                                class="product-title">
                                                                                                                <h5><a
                                                                                                                        href="https://dtaugury.wpengine.com/product/around-the-universe/">Around
                                                                                                                        the
                                                                                                                        Universe</a>
                                                                                                                </h5>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="product-buttons-wrapper product-button">
                                                                                                                <div
                                                                                                                    class="wc_inline_buttons">
                                                                                                                    <div class="wcct_btn_wrapper wc_btn_inline"
                                                                                                                        data-tooltip="Add To Cart">
                                                                                                                        <a href="?add-to-cart=20797"
                                                                                                                            data-quantity="1"
                                                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                                            data-product_id="20797"
                                                                                                                            data-product_sku="Woo-tshirt-logo"
                                                                                                                            aria-label="Add &ldquo;Around the Universe&rdquo; to your cart"
                                                                                                                            aria-describedby=""
                                                                                                                            rel="nofollow">Add
                                                                                                                            to
                                                                                                                            cart</a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><a
                                                                                                            href="#"
                                                                                                            class="button yith-wcqv-button"
                                                                                                            data-product_id="20797">Quick
                                                                                                            View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li
                                                                                                class="product-grid-view product type-product post-20790 status-publish instock product_cat-music has-post-thumbnail sale downloadable virtual purchasable product-type-simple">
                                                                                                <div
                                                                                                    class="dt-col dt-col-xs-12 dt-col-sm-6 dt-col-md-6 dt-col-qxlg-4 dt-col-hxlg-3 dt-col-lg-3">
                                                                                                    <div
                                                                                                        class="product-wrapper">
                                                                                                        <div
                                                                                                            class="product-thumb">
                                                                                                            <a class="image"
                                                                                                                href="https://dtaugury.wpengine.com/product/the-starborn-secrets/"
                                                                                                                title="The Starborn Secrets">
                                                                                                                <div
                                                                                                                    class="product-thumb-overlay">
                                                                                                                </div>
                                                                                                                <div class="primary-image"
                                                                                                                    style="background-image:url(https://dtaugury.wpengine.com/wp-content/uploads/2020/02/shop-10.jpg)">
                                                                                                                </div>
                                                                                                            </a>
                                                                                                            <div
                                                                                                                class="product-thumb-content">
                                                                                                                <div
                                                                                                                    class="product-buttons-wrapper product-icons">
                                                                                                                    <div
                                                                                                                        class="wc_inline_buttons">
                                                                                                                        <div class="wcwl_btn_wrapper wc_btn_inline"
                                                                                                                            data-tooltip="Wishlist">
                                                                                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-20790  wishlist-fragment on-first-load"
                                                                                                                                data-fragment-ref="20790"
                                                                                                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;20790&quot;,&quot;parent_product_id&quot;:20790,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                                                <!-- ADD TO WISHLIST -->

                                                                                                                                <div
                                                                                                                                    class="yith-wcwl-add-button">
                                                                                                                                    <a href="?add_to_wishlist=20790&#038;_wpnonce=b1013c0c42"
                                                                                                                                        class="add_to_wishlist single_add_to_wishlist"
                                                                                                                                        data-product-id="20790"
                                                                                                                                        data-product-type="simple"
                                                                                                                                        data-original-product-id="20790"
                                                                                                                                        data-title="Add to wishlist"
                                                                                                                                        rel="nofollow">
                                                                                                                                        <span>Add
                                                                                                                                            to
                                                                                                                                            wishlist</span>
                                                                                                                                    </a>
                                                                                                                                </div>

                                                                                                                                <!-- COUNT TEXT -->

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="wccm_btn_wrapper wc_btn_inline"
                                                                                                                            data-tooltip="Compare">
                                                                                                                            <a href="/?action=yith-woocompare-add-product&id=20790"
                                                                                                                                class="button compare yith-woocompare-button"
                                                                                                                                data-product_id="20790"
                                                                                                                                rel="nofollow">Compare</a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="product-details">
                                                                                                            <div
                                                                                                                class="product-title">
                                                                                                                <h5><a
                                                                                                                        href="https://dtaugury.wpengine.com/product/the-starborn-secrets/">The
                                                                                                                        Starborn
                                                                                                                        Secrets</a>
                                                                                                                </h5>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="product-buttons-wrapper product-button">
                                                                                                                <div
                                                                                                                    class="wc_inline_buttons">
                                                                                                                    <div class="wcct_btn_wrapper wc_btn_inline"
                                                                                                                        data-tooltip="Add To Cart">
                                                                                                                        <a href="?add-to-cart=20790"
                                                                                                                            data-quantity="1"
                                                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                                            data-product_id="20790"
                                                                                                                            data-product_sku="woo-single"
                                                                                                                            aria-label="Add &ldquo;The Starborn Secrets&rdquo; to your cart"
                                                                                                                            aria-describedby=""
                                                                                                                            rel="nofollow">Add
                                                                                                                            to
                                                                                                                            cart</a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><a
                                                                                                            href="#"
                                                                                                            class="button yith-wcqv-button"
                                                                                                            data-product_id="20790">Quick
                                                                                                            View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>
                                                                                            <li
                                                                                                class="product-grid-view product type-product post-20789 status-publish last instock product_cat-music has-post-thumbnail downloadable virtual purchasable product-type-simple">
                                                                                                <div
                                                                                                    class="dt-col dt-col-xs-12 dt-col-sm-6 dt-col-md-6 dt-col-qxlg-4 dt-col-hxlg-3 dt-col-lg-3">
                                                                                                    <div
                                                                                                        class="product-wrapper">
                                                                                                        <div
                                                                                                            class="product-thumb">
                                                                                                            <a class="image"
                                                                                                                href="https://dtaugury.wpengine.com/product/the-modern-astrology/"
                                                                                                                title="The Modern Astrology">
                                                                                                                <div
                                                                                                                    class="product-thumb-overlay">
                                                                                                                </div>
                                                                                                                <div class="primary-image"
                                                                                                                    style="background-image:url(https://dtaugury.wpengine.com/wp-content/uploads/2020/02/Book1-1.jpg)">
                                                                                                                </div>
                                                                                                            </a>
                                                                                                            <div
                                                                                                                class="product-thumb-content">
                                                                                                                <div
                                                                                                                    class="product-buttons-wrapper product-icons">
                                                                                                                    <div
                                                                                                                        class="wc_inline_buttons">
                                                                                                                        <div class="wcwl_btn_wrapper wc_btn_inline"
                                                                                                                            data-tooltip="Wishlist">
                                                                                                                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-20789  wishlist-fragment on-first-load"
                                                                                                                                data-fragment-ref="20789"
                                                                                                                                data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;in_default_wishlist&quot;:false,&quot;is_single&quot;:false,&quot;show_exists&quot;:false,&quot;product_id&quot;:&quot;20789&quot;,&quot;parent_product_id&quot;:20789,&quot;product_type&quot;:&quot;simple&quot;,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;Browse wishlist&quot;,&quot;already_in_wishslist_text&quot;:&quot;The product is already in your wishlist!&quot;,&quot;product_added_text&quot;:&quot;Product added!&quot;,&quot;heading_icon&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;after_add_to_cart&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">

                                                                                                                                <!-- ADD TO WISHLIST -->

                                                                                                                                <div
                                                                                                                                    class="yith-wcwl-add-button">
                                                                                                                                    <a href="?add_to_wishlist=20789&#038;_wpnonce=b1013c0c42"
                                                                                                                                        class="add_to_wishlist single_add_to_wishlist"
                                                                                                                                        data-product-id="20789"
                                                                                                                                        data-product-type="simple"
                                                                                                                                        data-original-product-id="20789"
                                                                                                                                        data-title="Add to wishlist"
                                                                                                                                        rel="nofollow">
                                                                                                                                        <span>Add
                                                                                                                                            to
                                                                                                                                            wishlist</span>
                                                                                                                                    </a>
                                                                                                                                </div>

                                                                                                                                <!-- COUNT TEXT -->

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="wccm_btn_wrapper wc_btn_inline"
                                                                                                                            data-tooltip="Compare">
                                                                                                                            <a href="/?action=yith-woocompare-add-product&id=20789"
                                                                                                                                class="button compare yith-woocompare-button"
                                                                                                                                data-product_id="20789"
                                                                                                                                rel="nofollow">Compare</a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="product-details">
                                                                                                            <div
                                                                                                                class="product-title">
                                                                                                                <h5><a
                                                                                                                        href="https://dtaugury.wpengine.com/product/the-modern-astrology/">The
                                                                                                                        Modern
                                                                                                                        Astrology</a>
                                                                                                                </h5>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="product-buttons-wrapper product-button">
                                                                                                                <div
                                                                                                                    class="wc_inline_buttons">
                                                                                                                    <div class="wcct_btn_wrapper wc_btn_inline"
                                                                                                                        data-tooltip="Add To Cart">
                                                                                                                        <a href="?add-to-cart=20789"
                                                                                                                            data-quantity="1"
                                                                                                                            class="dt-sc-button too-small button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                                            data-product_id="20789"
                                                                                                                            data-product_sku="woo-album"
                                                                                                                            aria-label="Add &ldquo;The Modern Astrology&rdquo; to your cart"
                                                                                                                            aria-describedby=""
                                                                                                                            rel="nofollow">Add
                                                                                                                            to
                                                                                                                            cart</a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div><a
                                                                                                            href="#"
                                                                                                            class="button yith-wcqv-button"
                                                                                                            data-product_id="20789">Quick
                                                                                                            View</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-cc79a2b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="cc79a2b" data-element_type="section"
                                data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;463cdc6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4bbd258"
                                            data-id="4bbd258" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-5d326ea section-divider elementor-widget elementor-widget-spacer"
                                                        data-id="5d326ea" data-element_type="widget"
                                                        data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-f10af8b elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="f10af8b" data-element_type="section"
                                data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;29e7507&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}],&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-bf8d22c"
                                            data-id="bf8d22c" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="jet-parallax-widget elementor-element elementor-element-8ad355e elementor-widget__width-auto elementor-absolute elementor-widget elementor-widget-image"
                                                        data-jet-tricks-settings="{&quot;parallax&quot;:&quot;true&quot;,&quot;invert&quot;:&quot;false&quot;,&quot;speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;stickyOn&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}"
                                                        data-id="8ad355e" data-element_type="widget"
                                                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-image">
                                                                <img decoding="async"
                                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/01/light-moon.png"
                                                                    title="light-moon" alt="light-moon"
                                                                    loading="lazy" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-8f74bfa elementor-widget elementor-widget-heading"
                                                        data-id="8f74bfa" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default">
                                                                Get in Touch</h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-ae5dd92 elementor-widget elementor-widget-shortcode"
                                                        data-id="ae5dd92" data-element_type="widget"
                                                        data-widget_type="shortcode.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-shortcode">
                                                                <div class="wpcf7 no-js" id="wpcf7-f20560-p20398-o1"
                                                                    lang="en-US" dir="ltr">
                                                                    <div class="screen-reader-response">
                                                                        <p role="status" aria-live="polite"
                                                                            aria-atomic="true"></p>
                                                                        <ul></ul>
                                                                    </div>
                                                                    <form action="/#wpcf7-f20560-p20398-o1"
                                                                        method="post" class="wpcf7-form init"
                                                                        aria-label="Contact form"
                                                                        novalidate="novalidate" data-status="init">
                                                                        <div style="display: none;">
                                                                            <input type="hidden" name="_wpcf7"
                                                                                value="20560" />
                                                                            <input type="hidden" name="_wpcf7_version"
                                                                                value="5.7.7" />
                                                                            <input type="hidden" name="_wpcf7_locale"
                                                                                value="en_US" />
                                                                            <input type="hidden" name="_wpcf7_unit_tag"
                                                                                value="wpcf7-f20560-p20398-o1" />
                                                                            <input type="hidden"
                                                                                name="_wpcf7_container_post"
                                                                                value="20398" />
                                                                            <input type="hidden"
                                                                                name="_wpcf7_posted_data_hash"
                                                                                value="" />
                                                                        </div>
                                                                        <div class="dt-sc-one-third first column">
                                                                            <p><span class="wpcf7-form-control-wrap"
                                                                                    data-name="text-758"><input
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Name" value=""
                                                                                        type="text"
                                                                                        name="text-758" /></span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="dt-sc-one-third column">
                                                                            <p><span class="wpcf7-form-control-wrap"
                                                                                    data-name="email-20"><input
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"
                                                                                        aria-invalid="false"
                                                                                        placeholder="Your email Address"
                                                                                        value="" type="email"
                                                                                        name="email-20" /></span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="dt-sc-one-fourth column">
                                                                            <p><input
                                                                                    class="wpcf7-form-control has-spinner wpcf7-submit"
                                                                                    type="submit"
                                                                                    value="Get Notified" />
                                                                            </p>
                                                                        </div>
                                                                        <div class="wpcf7-response-output"
                                                                            aria-hidden="true"></div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-e513916 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="e513916" data-element_type="section"
                                data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;463cdc6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c9bd705"
                                            data-id="c9bd705" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-7f5480a elementor-widget elementor-widget-spacer"
                                                        data-id="7f5480a" data-element_type="widget"
                                                        data-widget_type="spacer.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-spacer">
                                                                <div class="elementor-spacer-inner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div><!-- #post-20398 -->
        </section><!-- Primary End -->
    </div>
    <!-- ** Container End ** -->

</div><!-- **Main - End ** -->

@endsection

@section('footer')
@include('FrontClient.panels.footer')
@endsection
