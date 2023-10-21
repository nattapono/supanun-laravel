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
                        <h3 style="color:#4e9d43">@lang('client.forecast.title')</h3>
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
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-2fa3561 elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
            data-id="2fa3561" data-element_type="section"
            data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;3e16bd6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
            <div
                class="jet-parallax-section__layout elementor-repeater-item-3e16bd6 jet-parallax-section__scroll-layout is-mac">
                <div class="jet-parallax-section__image"
                    style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(92.4px);">
                </div>
            </div>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-47c4926"
                        data-id="47c4926" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <h4>เปิดไพ่ทำนายดวงชะตา</h4>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-0e6b5e4 elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                    data-id="0e6b5e4" data-element_type="section"
                                    data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;0d382a6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                    <div
                                        class="jet-parallax-section__layout elementor-repeater-item-0d382a6 jet-parallax-section__scroll-layout is-mac">
                                        <div class="jet-parallax-section__image"
                                            style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(708.4px);">
                                        </div>
                                    </div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-256c0d8"
                                                data-id="256c0d8" data-element_type="column">
                                                <div class="elementor-column-wrap">
                                                    <div class="elementor-widget-wrap">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-971e815"
                                                data-id="971e815" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-4fcbaec elementor-widget elementor-widget-text-editor is-mac"
                                                            data-id="4fcbaec" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-text-editor">
                                                                    <section
                                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-89e7524 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                                        data-id="89e7524" data-element_type="section">
                                                                        <div class="qodef-shortcode qodef-m  qodef-tarot-list  qodef-grid qodef-layout--columns     qodef-item-layout--card-back   qodef-responsive--predefined"
                                                                            data-options="{&quot;plugin&quot;:&quot;synastry_core&quot;,&quot;module&quot;:&quot;post-types\/tarot\/shortcodes&quot;,&quot;shortcode&quot;:&quot;tarot-list&quot;,&quot;post_type&quot;:&quot;tarot&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:2,&quot;posts_per_page&quot;:&quot;7&quot;,&quot;orderby&quot;:&quot;rand&quot;,&quot;order&quot;:&quot;ASC&quot;,&quot;additional_params&quot;:&quot;tax&quot;,&quot;tax&quot;:&quot;tarot-category&quot;,&quot;tax_slug&quot;:&quot;cards&quot;,&quot;layout&quot;:&quot;card-back&quot;,&quot;image&quot;:8666,&quot;image_size&quot;:&quot;342x564&quot;,&quot;object_class_name&quot;:&quot;SynastryCore_Tarot_List_Shortcode&quot;,&quot;behavior&quot;:&quot;columns&quot;,&quot;additional_query_args&quot;:{&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;tarot-category&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;terms&quot;:&quot;cards&quot;}]}}">
                                                                            <div class="qodef-grid-inner"
                                                                                style="margin-top:-89px;">
                                                                                @if(isset($card_data))
                                                                                <?php  $left= 210; $i = 1; ?>
                                                                                @foreach($card_data as $item)
                                                                                <?php $position_lefft = $left+($i*50); ?>
                                                                                <div class="qodef-e qodef-grid-item  post-1974 tarot type-tarot status-publish has-post-thumbnail hentry tarot-category-cards tarot-tag-card"
                                                                                    style="--index: 0; left: <?php echo  $position_lefft; ?>px; top: 40px; width: 342px;">
                                                                                    <div class="qodef-e-inner">
                                                                                        <div class="qodef-e-media">
                                                                                            <a itemprop="url" href="#">
                                                                                                <img decoding="async"
                                                                                                    fetchpriority="high"
                                                                                                    src="https://synastry.qodeinteractive.com/wp-content/uploads/2023/07/card-back-2-342x564.png"
                                                                                                    alt="a" width="184"
                                                                                                    height="564"
                                                                                                    data-ratio="0.6063829787234">
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php  $i++; ?>
                                                                                @endforeach
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1d9bb03"
                                                data-id="1d9bb03" data-element_type="column">
                                                <div class="elementor-column-wrap">
                                                    <div class="elementor-widget-wrap">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-5b64e86 elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                    style="margin-top:480px;" data-id="5b64e86" data-element_type="section"
                                    data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;0d382a6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                    <div
                                        class="jet-parallax-section__layout elementor-repeater-item-0d382a6 jet-parallax-section__scroll-layout is-mac">
                                        <div class="jet-parallax-section__image"
                                            style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(195.2px);">
                                        </div>
                                    </div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            @if(isset($data_zodiac))
                                            <?php $i=1; ?>
                                            @foreach($data_zodiac as $item)
                                            <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-67de41b dt-col-sm-4"
                                                data-id="67de41b" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-f597090 aligncenter elementor-widget elementor-widget-dt-iconbox"
                                                            data-id="f597090" data-element_type="widget"
                                                            data-widget_type="dt-iconbox.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="dt-sc-iconbox-wrapper ">
                                                                    <div style="margin:20px 0px;"
                                                                        class="dt-sc-iconbox-container">
                                                                        <div class="iconbox-bg"><img decoding="async"
                                                                                src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/zodiac-bg<?php echo $i; ?>.png"
                                                                                alt="20756" /></div>
                                                                        <img decoding="async"
                                                                            src="/augury_template/storage/app/public/images/rasi/{{ $item->rasi_image}}"
                                                                            alt="{{ $item->rasi_name_th}}"
                                                                            alt="20877" />
                                                                        <div class="iconbox-hover">
                                                                            <img decoding="async"
                                                                                src="https://dtaugury.wpengine.com/wp-content/uploads/2020/02/zodiac-bg<?php echo $i; ?>-1.png"
                                                                                alt="20757"
                                                                                style="z-index: 9; filter: drop-shadow(2px 4px 6px black);" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="dt-sc-iconbox-description">
                                                                        <h5><a href="https://dtaugury.wpengine.com/forecast/aries/"
                                                                                title="Aries">{{ $item->rasi_name_th}}</a>
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

                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- ** Container End ** -->

</div>

@endsection

@section('footer')
@include('FrontClient.panels.footer')
@endsection
