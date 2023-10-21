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
            <section class="main-title-section-wrapper aligncenter dark-bg-breadcrumb">
                <div class="main-title-section-bg" style="height: 620.992px;"></div>
                <div class="container">
                    <div class="main-title-section">
                        <h1>@lang('client.global.activity')</h1>
                    </div>
                </div>
            </section>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </div>
</div>
<div id="main">
    <!-- ** Container ** -->
    <div class="container">
        <!-- Primary -->
        <h1>{{$activity_album['ac_name_th']}}</h1>
        <p>{!!$activity_album['ac_desc_th']!!}</p>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-6c86049 elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
            data-id="6c86049" data-element_type="section"
            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;38ea8f4&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
            <div
                class="jet-parallax-section__layout elementor-repeater-item-38ea8f4 jet-parallax-section__scroll-layout is-mac">
                <div class="jet-parallax-section__image"
                    style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(200.9px);">
                </div>
            </div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-37fea17"
                        data-id="37fea17" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-7879f64 elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                    data-id="7879f64" data-element_type="section"
                                    data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;587d084&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                    <div
                                        class="jet-parallax-section__layout elementor-repeater-item-587d084 jet-parallax-section__scroll-layout is-mac">
                                        <div class="jet-parallax-section__image"
                                            style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(412.9px);">
                                        </div>
                                    </div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-22c20ed"
                                                data-id="22c20ed" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-7c59664 elementor-widget elementor-widget-image is-mac"
                                                            data-id="7c59664" data-element_type="widget"
                                                            data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-image">
                                                                    <a href="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-4.jpg"
                                                                        data-elementor-open-lightbox="yes"
                                                                        data-elementor-lightbox-title="portfolio-4"
                                                                        data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUwMDksInVybCI6Imh0dHBzOlwvXC9kdGF1Z3VyeS53cGVuZ2luZS5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzAyXC9wb3J0Zm9saW8tNC5qcGcifQ%3D%3D">

                                                                            <img src="{{asset('/augury_template/storage/app/public/images/album/'.$activity_album['ac_image_th'])}}"
                                                                            class="attachment-full size-full wp-image-25009"
                                                                            alt="">
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
                                <!-- <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-bd8017c elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                    data-id="bd8017c" data-element_type="section"
                                    data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;587d084&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                    <div
                                        class="jet-parallax-section__layout elementor-repeater-item-587d084 jet-parallax-section__scroll-layout is-mac">
                                        <div class="jet-parallax-section__image"
                                            style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(312.9px);">
                                        </div>
                                    </div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d936e23"
                                                data-id="d936e23" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-6f2ade1 elementor-widget elementor-widget-image is-mac"
                                                            data-id="6f2ade1" data-element_type="widget"
                                                            data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-image">
                                                                    <a href="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-2.jpg"
                                                                        data-elementor-open-lightbox="yes"
                                                                        data-elementor-lightbox-title="portfolio-2"
                                                                        data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUwMDcsInVybCI6Imh0dHBzOlwvXC9kdGF1Z3VyeS53cGVuZ2luZS5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzAyXC9wb3J0Zm9saW8tMi5qcGcifQ%3D%3D">
                                                                        <img decoding="async" width="480" height="350"
                                                                            src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-2.jpg"
                                                                            class="attachment-full size-full wp-image-25007"
                                                                            alt=""
                                                                            srcset="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-2.jpg 480w, https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-2-300x219.jpg 300w"
                                                                            sizes="(max-width: 480px) 100vw, 480px">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d7221ac"
                        data-id="d7221ac" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-c00646f elementor-widget elementor-widget-image is-mac"
                                    data-id="c00646f" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                            <a href="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-15.jpg"
                                                data-elementor-open-lightbox="yes"
                                                data-elementor-lightbox-title="portfolio-15"
                                                data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUwMjAsInVybCI6Imh0dHBzOlwvXC9kdGF1Z3VyeS53cGVuZ2luZS5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzAyXC9wb3J0Zm9saW8tMTUuanBnIn0%3D">
                                                <img decoding="async" loading="lazy" width="480" height="720"
                                                    src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-15.jpg"
                                                    class="attachment-full size-full wp-image-25020" alt=""
                                                    srcset="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-15.jpg 480w, https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-15-200x300.jpg 200w"
                                                    sizes="(max-width: 480px) 100vw, 480px"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-98e7629"
                        data-id="98e7629" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <!-- <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-24f8141 elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                    data-id="24f8141" data-element_type="section"
                                    data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;587d084&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                    <div
                                        class="jet-parallax-section__layout elementor-repeater-item-587d084 jet-parallax-section__scroll-layout is-mac">
                                        <div class="jet-parallax-section__image"
                                            style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(412.9px);">
                                        </div>
                                    </div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4a74a1e"
                                                data-id="4a74a1e" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-576ae47 elementor-widget elementor-widget-image is-mac"
                                                            data-id="576ae47" data-element_type="widget"
                                                            data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-image">
                                                                    <a href="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-7.jpg"
                                                                        data-elementor-open-lightbox="yes"
                                                                        data-elementor-lightbox-title="portfolio-7"
                                                                        data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUwMTIsInVybCI6Imh0dHBzOlwvXC9kdGF1Z3VyeS53cGVuZ2luZS5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzAyXC9wb3J0Zm9saW8tNy5qcGcifQ%3D%3D">
                                                                        <img decoding="async" loading="lazy" width="480"
                                                                            height="350"
                                                                            src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-7.jpg"
                                                                            class="attachment-full size-full wp-image-25012"
                                                                            alt=""
                                                                            srcset="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-7.jpg 480w, https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-7-300x219.jpg 300w"
                                                                            sizes="(max-width: 480px) 100vw, 480px">
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
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-bcc0794 elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                    data-id="bcc0794" data-element_type="section"
                                    data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;587d084&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                    <div
                                        class="jet-parallax-section__layout elementor-repeater-item-587d084 jet-parallax-section__scroll-layout is-mac">
                                        <div class="jet-parallax-section__image"
                                            style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(312.9px);">
                                        </div>
                                    </div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-169f81f"
                                                data-id="169f81f" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-b3da623 elementor-widget elementor-widget-image is-mac"
                                                            data-id="b3da623" data-element_type="widget"
                                                            data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-image">
                                                                    <a href="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-12.jpg"
                                                                        data-elementor-open-lightbox="yes"
                                                                        data-elementor-lightbox-title="portfolio-12"
                                                                        data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUwMTcsInVybCI6Imh0dHBzOlwvXC9kdGF1Z3VyeS53cGVuZ2luZS5jb21cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzAyXC9wb3J0Zm9saW8tMTIuanBnIn0%3D">
                                                                        <img decoding="async" loading="lazy" width="480"
                                                                            height="350"
                                                                            src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-12.jpg"
                                                                            class="attachment-full size-full wp-image-25017"
                                                                            alt=""
                                                                            srcset="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-12.jpg 480w, https://dtaugury.wpengine.com/wp-content/uploads/2020/02/portfolio-12-300x219.jpg 300w"
                                                                            sizes="(max-width: 480px) 100vw, 480px">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</section>
<!-- ** Container End ** -->

@endsection

@section('footer')
@include('FrontClient.panels.footer')
@endsection
