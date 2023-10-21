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
                        <h3 style="color:#4e9d43">@lang('client.payment.title')</h3>
                    </div>
                </div>
            </section>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </div>
</div>

<div id="">

    <!-- ** Container ** -->
    <div class="container">
        <!-- Primary -->
        <section id="primary" class="content-full-width">
            <!-- #post-20670 -->
            <div id="post-20670" class="post-20670 page type-page status-publish hentry">
                <div data-elementor-type="wp-page" data-elementor-id="20670" class="elementor elementor-20670">
                    <div class="elementor-inner">
                        <div class="elementor-section-wrap">
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-1b0ecae elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                data-id="1b0ecae" data-element_type="section"
                                data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;d4ea58e&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                <div
                                    class="jet-parallax-section__layout elementor-repeater-item-d4ea58e jet-parallax-section__scroll-layout is-mac">
                                    <div class="jet-parallax-section__image"
                                        style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(927.3px);">
                                    </div>
                                </div>
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aabd42c"
                                            data-id="aabd42c" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-e17eff3 section-divider elementor-widget elementor-widget-spacer is-mac"
                                                        data-id="e17eff3" data-element_type="widget"
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
                                class="elementor-section elementor-top-section elementor-element elementor-element-4329c17 elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                data-id="4329c17" data-element_type="section"
                                data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;3e16bd6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                <div
                                    class="jet-parallax-section__layout elementor-repeater-item-3e16bd6 jet-parallax-section__scroll-layout is-mac">
                                    <div class="jet-parallax-section__image"
                                        style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(348.3px);">
                                    </div>
                                </div>
                                <div class="elementor-container elementor-column-gap-extended">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f9089b2"
                                            data-id="f9089b2" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-048ad7b elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                                        data-id="048ad7b" data-element_type="section"
                                                        data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;0d382a6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                                        <div
                                                            class="jet-parallax-section__layout elementor-repeater-item-0d382a6 jet-parallax-section__scroll-layout is-mac">
                                                            <div class="jet-parallax-section__image"
                                                                style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(647.5px);">
                                                            </div>
                                                        </div>
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e2169f8"
                                                                    data-id="e2169f8" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-9b9b82f dt-skin-secondary-color elementor-widget elementor-widget-heading is-mac"
                                                                                data-id="9b9b82f"
                                                                                data-element_type="widget"
                                                                                data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h4 style="text-align:center"
                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                        Horoscope</h4>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-0bfad6e elementor-widget elementor-widget-heading is-mac"
                                                                                data-id="0bfad6e"
                                                                                data-element_type="widget"
                                                                                data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 style="color:#4e9d43;text-align:center"
                                                                                        class="elementor-heading-title elementor-size-default">
                                                                                        Get Personalized Horoscope</h2>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section
                                                        class="elementor-section elementor-inner-section elementor-element elementor-element-1842431 title-bottom-content-wrapper elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                                        data-id="1842431" data-element_type="section"
                                                        data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;0d382a6&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                                        <div
                                                            class="jet-parallax-section__layout elementor-repeater-item-0d382a6 jet-parallax-section__scroll-layout is-mac">
                                                            <div class="jet-parallax-section__image"
                                                                style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(795px);">
                                                            </div>
                                                        </div>
                                                        <div class="elementor-container elementor-column-gap-default">
                                                            <div class="elementor-row">
                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ca2137b"
                                                                    data-id="ca2137b" data-element_type="column">
                                                                    <div class="elementor-column-wrap">
                                                                        <div class="elementor-widget-wrap">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-278e27e"
                                                                    data-id="278e27e" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div class="elementor-element elementor-element-ec45d20 elementor-widget elementor-widget-text-editor is-mac"
                                                                                data-id="ec45d20"
                                                                                data-element_type="widget"
                                                                                data-widget_type="text-editor.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div
                                                                                        class="elementor-text-editor elementor-clearfix">
                                                                                        <p style="color:#4e9d43; text-align:center;">Lorem ipsum dolor sit amet,
                                                                                            consectetur adipiscing elit,
                                                                                            sed do eiusmod tempor Lorem
                                                                                            ipsum dolor.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4d31690"
                                                                    data-id="4d31690" data-element_type="column">
                                                                    <div class="elementor-column-wrap">
                                                                        <div class="elementor-widget-wrap">
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
                                class="elementor-section elementor-top-section elementor-element elementor-element-c4e9322 elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                data-id="c4e9322" data-element_type="section"
                                data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;94e1ebd&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                <div
                                    class="jet-parallax-section__layout elementor-repeater-item-94e1ebd jet-parallax-section__scroll-layout is-mac">
                                    <div class="jet-parallax-section__image"
                                        style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(121.1px);">
                                    </div>
                                </div>
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b243afc dt-col-sm-6"
                                            data-id="b243afc" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-2decc92 hide-feature elementor-widget elementor-widget-jet-pricing-table is-mac"
                                                        data-id="2decc92" data-element_type="widget"
                                                        data-widget_type="jet-pricing-table.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-jet-pricing-table jet-elements">
                                                                <div class="pricing-table ">
                                                                    <div class="pricing-table__heading">
                                                                        <div class="pricing-table__icon">
                                                                            <div class="pricing-table__icon-box"><span
                                                                                    class="jet-elements-icon"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                        x="0px" y="0px"
                                                                                        viewBox="0 0 110 95"
                                                                                        style="enable-background:new 0 0 110 95;"
                                                                                        xml:space="preserve">
                                                                                        <g id="Layer_1">
                                                                                            <g
                                                                                                transform="translate(0,-952.36218)">
                                                                                                <path
                                                                                                    d="M54.7,974.1c-30,0-53.8,24.2-53.8,24.2c-0.7,0.7-0.7,1.8,0,2.5c0,0,23.8,24.2,53.8,24.2s53.8-24.2,53.8-24.2    c0.7-0.7,0.7-1.8,0-2.5C108.5,998.3,84.7,974.1,54.7,974.1z M54.7,977.7c25.6,0,46.4,18.6,49.9,21.9c-3.5,3.3-24.2,21.9-49.9,21.9    c-25.6,0-46.3-18.6-49.9-21.9C8.4,996.3,29.1,977.7,54.7,977.7z M54.7,982.5c-9.5,0-17.2,7.7-17.2,17.1c0,9.4,7.7,17.1,17.2,17.1    c9.5,0,17.2-7.7,17.2-17.1C71.9,990.2,64.2,982.5,54.7,982.5z M54.7,986c7.6,0,13.6,6.1,13.6,13.6c0,7.5-6.1,13.6-13.6,13.6    c-7.6,0-13.6-6.1-13.6-13.6C41.1,992.1,47.2,986,54.7,986z M53.3,987.8v1.9c-0.8,0.1-1.6,0.3-2.3,0.6c-1.1,0.4-1.9,1.1-2.4,1.9    c-0.6,0.8-0.8,1.8-0.8,2.7c0,0.9,0.2,1.7,0.7,2.4c0.5,0.7,1.1,1.3,2.1,1.8c0.6,0.3,1.6,0.6,2.8,1v7c-0.4-0.1-0.8-0.2-1.1-0.3    c-0.9-0.4-1.5-0.9-2-1.5c-0.4-0.6-0.7-1.4-0.8-2.4l-2.4,0.2c0,1.3,0.4,2.4,1.1,3.5c0.7,1,1.6,1.8,2.8,2.3c0.7,0.3,1.5,0.5,2.5,0.6    v1.9h2.8v-1.8c1-0.1,2-0.3,2.9-0.7c1.1-0.5,2-1.2,2.5-2.1c0.6-0.9,0.9-1.9,0.9-2.9c0-1-0.3-1.9-0.8-2.7c-0.5-0.8-1.4-1.5-2.5-2    c-0.6-0.3-1.7-0.6-3-0.9V992c0.8,0.1,1.5,0.4,2,0.8c0.8,0.6,1.2,1.5,1.3,2.8l2.5-0.2c0-1.1-0.4-2.1-1-3c-0.6-0.9-1.4-1.6-2.5-2.1    c-0.7-0.3-1.4-0.4-2.2-0.6v-1.9L53.3,987.8L53.3,987.8z M53.3,991.9v5.5c-1.2-0.3-2-0.7-2.4-1c-0.5-0.4-0.7-1-0.7-1.7    c0-0.8,0.4-1.5,1.1-2.1C51.8,992.3,52.4,992,53.3,991.9L53.3,991.9z M56.1,1000.8c0.7,0.2,1.3,0.4,1.6,0.5    c0.8,0.3,1.4,0.7,1.7,1.1c0.4,0.5,0.6,1,0.6,1.6c0,0.6-0.2,1.2-0.6,1.7c-0.4,0.5-0.9,0.9-1.7,1.2c-0.5,0.2-1,0.3-1.6,0.4    L56.1,1000.8L56.1,1000.8z">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g id="Layer_2"
                                                                                            style="display:none;">
                                                                                            <g style="display:inline;">
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M41.5,45.6h5.2v13c0,1.2,1,2.1,2.1,2.1h12.3c1.3,0,2.3-1,2.3-2.3V45.6h5.2V25c0-4.6-3.4-8.2-7.6-8.2H49     c-4.1,0-7.6,3.7-7.6,8.2V45.6z M44.3,25c0-3,2.1-5.3,4.7-5.3h11.9c2.6,0,4.7,2.4,4.7,5.3v17.7h-2.3v-9.3c0-0.9-0.6-1.4-1.4-1.4     s-1.4,0.6-1.4,1.4v24.5h-4.1V44.8c0-0.9-0.6-1.4-1.4-1.4s-1.4,0.6-1.4,1.4v13.2h-4V33.6c0-0.9-0.6-1.4-1.4-1.4s-1.4,0.6-1.4,1.4     v9.3h-2.3L44.3,25z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M54.9,15.4c4.3,0,7.7-3.3,7.7-7.4s-3.4-7.4-7.7-7.4S47.2,3.9,47.2,8S50.6,15.4,54.9,15.4z M54.9,3.4c2.7,0,4.9,2,4.9,4.6     s-2.1,4.6-4.9,4.6S50,10.6,50,8S52.2,3.4,54.9,3.4z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M37,78.3H9.8v15.6h28.6V79.7C38.4,79,37.9,78.3,37,78.3z M35.6,91H12.7v-9.9h22.9V91z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M98.5,78.3H71.4v15.6H100V79.7C100,79,99.4,78.3,98.5,78.3z M97.1,91H74.2v-9.9h22.9V91z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M69.2,65.7H40.6v14.2V94h28.6V79.8V65.7z M43.5,68.5h22.9v9.9H43.5V68.5z M66.4,91H43.5v-9.9h22.9V91z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M13.1,50.2h3.6v24.6h12V50.2h3.6c1.1,0,1.9-1.3,1.1-2.1l-9.6-15.3c-0.6-0.9-1.9-0.9-2.4,0l-9.6,15.3     C11.3,49.1,12,50.2,13.1,50.2z M22.7,36.2l7,11.2h-3.9V72h-6.3V47.4h-3.9L22.7,36.2z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M77.5,50.2h3.6v24.6h12V50.2h3.6c0.6,0,1-0.3,1.3-0.7c0.3-0.4,0.3-1,0-1.4l-9.6-15.3c-0.3-0.4-0.7-0.7-1.1-0.7     c-0.4,0-1,0.3-1.1,0.7l-9.6,15.3c-0.3,0.4-0.3,1,0,1.4C76.5,49.9,76.9,50.2,77.5,50.2z M87.1,36.2l7,11.2h-3.9V72H84V47.4h-3.9     L87.1,36.2z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g id="Layer_3"
                                                                                            style="display:none;">
                                                                                            <g style="display:inline;">
                                                                                                <path
                                                                                                    d="M96.1,73.5c-0.9,0-1.9-0.2-2.7-0.7c-3.3-1.7-5-5.9-5.5-9.1c-0.5-2.8-0.8-5.7-0.8-8.5c0-2.2-0.5-3.5-1-3.7    c-0.7-0.4-0.9-1.3-0.4-2c0.4-0.6,1.1-0.8,1.8-0.6c1.7,0.9,2.6,3.1,2.6,6.3c0,2.7,0.2,5.4,0.7,8.1c0.5,3.2,2.2,6,4,7    c0.9,0.5,1.9,0.5,2.8,0c0.2-0.7-0.1-2.8-0.3-4.1c-0.2-1.2-0.3-2.4-0.3-3.6V42.9c0-1.5-2.5-4.7-7.4-9.6s-4.4-8.8-3.6-11.3    c0.7-1.9,2.8-7,4.8-12C92.1,6.7,93.4,3.5,94,2c0.3-0.8,1.1-1.1,1.9-0.8S97,2.2,96.7,3c-0.6,1.6-1.9,4.8-3.3,8.2    c-1.9,4.7-4.1,10-4.7,11.8c-0.7,2-0.9,4.6,2.9,8.3c5.9,5.9,8.3,9.2,8.3,11.6v19.6c0,1.1,0.1,2.2,0.3,3.2c0.4,3.2,0.8,6-1.1,7    C98.2,73.3,97.2,73.5,96.1,73.5z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M67.4,93.2c-1,0-1.9-0.4-2.6-1.1c-3.3-3.3-0.2-8.2,2.1-11.8c0.5-0.8,1-1.7,1.5-2.5c1-2.1,5-11.5,5.7-13.3    c0.3-0.8,1.1-1.1,1.9-0.8c0.8,0.3,1.1,1.1,0.8,1.9c-0.7,2-4.9,11.5-5.8,13.4c-0.5,1-1,2-1.7,2.9c-1.7,2.8-4.1,6.6-2.5,8.2    c0.2,0.2,0.5,0.3,0.7,0.3c1.9-0.3,5.2-4.7,7.3-8.7c0.7-1.3,1.5-2.5,2.3-3.6c1.2-1.5,2.1-3.1,2.8-4.8c1.5-3.8,7.2-18.3,7.2-18.4    c0.3-0.8,1.1-1.1,1.9-0.8c0.8,0.3,1.1,1.1,0.8,1.9l0,0c-0.1,0.1-5.7,14.6-7.2,18.4c-0.8,2-1.9,3.8-3.2,5.5c-0.8,1-1.5,2.1-2.1,3.3    c-1.2,2.2-5.3,9.6-9.4,10.2C67.8,93.1,67.6,93.2,67.4,93.2z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M61.2,94c-1.3-0.1-2.6-0.6-3.5-1.5c-2.7-2.2-1.5-10-0.3-12.9c0.3-0.7,1.2-1.1,1.9-0.8c0.7,0.3,1.1,1.2,0.8,1.9    c-1.3,3-1.5,8.7-0.6,9.5c0.5,0.5,1.2,0.8,1.9,0.8c0.9-0.2,1.6-1.5,2.1-2.4l0.1-0.2c0.4-0.7,1.3-0.9,2-0.4c0.6,0.4,0.9,1.2,0.5,1.9    L66,90.2c-0.7,1.3-1.9,3.4-4.1,3.8C61.7,94,61.4,94,61.2,94z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M55.8,31.5c-0.8,0-1.5-0.7-1.5-1.5v-6c0-4.3,1.2-6.8,3.6-11.9l0.5-1.1c1.4-2.9,2.7-5.9,3.7-8.9c0.3-0.8,1.1-1.2,1.8-0.9    c0.7,0.2,1.1,1,0.9,1.8c-1.1,3.2-2.4,6.3-3.9,9.3l-0.5,1.1c-2.4,5-3.4,7.1-3.4,10.7v6C57.2,30.9,56.6,31.5,55.8,31.5z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M15.4,73.5c-1,0-2-0.3-2.9-0.7c-2-1-1.6-3.8-1.1-7c0.2-1.1,0.3-2.1,0.3-3.2V42.9c0-2.4,2.3-5.7,8.3-11.6    c3.8-3.8,3.6-6.3,2.9-8.3c-0.3-0.6-5.5-15.9-7.1-20c-0.3-0.8,0.1-1.6,0.8-1.9c0.8-0.3,1.6,0.1,1.9,0.8c1.6,4.2,6.8,19.4,7,20.1    c0.8,2.5,1.4,6.3-3.6,11.3s-7.4,8.1-7.4,9.6v19.7c0,1.2-0.2,2.4-0.3,3.6c-0.2,1.3-0.5,3.4-0.3,4.1c0.9,0.5,1.9,0.5,2.8,0    c1.8-0.9,3.5-3.8,4-7c0.5-2.7,0.7-5.4,0.7-8.1c0-3.2,0.7-5.2,2.2-6.2c0.7-0.3,1.6,0,1.9,0.7c0.3,0.6,0.1,1.3-0.4,1.7    c-0.3,0.2-0.8,1.4-0.8,3.7c0,2.9-0.3,5.7-0.8,8.5c-0.5,3.1-2.3,7.4-5.5,9.1C17.3,73.3,16.4,73.5,15.4,73.5z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M44.2,93.1c-0.2,0-0.4,0-0.6,0c-4.1-0.6-8.2-8-9.4-10.2c-0.6-1.1-1.3-2.2-2.1-3.3c-1.3-1.7-2.4-3.5-3.2-5.5    c-1.5-3.8-7.2-18.3-7.3-18.5c-0.3-0.7,0.1-1.6,0.8-1.9c0.7-0.3,1.6,0.1,1.9,0.8c0.1,0.1,5.7,14.6,7.2,18.4    c0.7,1.7,1.7,3.4,2.8,4.8c0.9,1.2,1.6,2.4,2.3,3.6c2.1,4,5.3,8.4,7.3,8.7c0.3,0.1,0.6,0,0.7-0.3c1.6-1.6-0.7-5.4-2.5-8.2    c-0.6-0.9-1.2-1.9-1.7-2.9c-0.8-1.9-5.1-11.6-5.7-13.4c-0.3-0.7,0.1-1.6,0.8-1.9c0.7-0.3,1.6,0.1,1.9,0.8    c0.7,1.7,4.9,11.4,5.7,13.2c0.4,0.9,0.9,1.7,1.5,2.5c2.2,3.6,5.3,8.6,2.1,11.8C46.1,92.7,45.1,93.1,44.2,93.1z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M50.7,93.7c-0.3,0-0.5,0-0.8-0.1c-2.4-0.5-3.9-2.9-4.5-4c-0.4-0.7-0.2-1.6,0.4-2s1.6-0.2,2,0.4c0,0,0,0.1,0.1,0.1    c0.4,0.7,1.4,2.3,2.5,2.5c0.8,0,1.5-0.3,2-0.8c0.8-0.7,0.4-6-0.9-9.2c-0.3-0.7,0-1.6,0.8-1.9c0.7-0.3,1.6,0,1.9,0.8    c0.8,2.1,3,10.3,0.1,12.6C53.3,93.2,52,93.7,50.7,93.7z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M55.8,49c-0.8,0-1.5-0.7-1.5-1.5V24c0-3.6-1-5.7-3.4-10.7l-0.5-1.1c-1.5-3-2.8-6.1-3.9-9.3c-0.2-0.8,0.2-1.6,1-1.8    c0.7-0.2,1.5,0.2,1.8,0.9c1.1,3.1,2.3,6,3.7,8.9l0.5,1.1c2.4,5.1,3.6,7.6,3.6,11.9v23.5C57.2,48.3,56.6,49,55.8,49z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M55.9,83.4c-0.3,0-0.6-0.1-0.9-0.3l-1.7-1.2c-8.6-6.2-24.5-17.9-24.5-33.3c0-7.8,6.4-14.2,14.2-14.2    c5.4,0,10.4,3.1,12.8,8c3.4-7,12-10,19-6.5c4.9,2.4,8,7.3,8,12.8c0,15.3-15.7,26.9-24.1,33.1l-1.9,1.4    C56.5,83.3,56.2,83.4,55.9,83.4z M43,37.3c-6.2,0-11.3,5.1-11.3,11.3c0,13.9,15.2,25,23.3,30.9l0.8,0.6l1-0.8    c8-5.9,22.9-16.9,22.9-30.8c0-6.2-5.1-11.3-11.3-11.3c-6.2,0-11.3,5.1-11.3,11.3c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5    C54.3,42.4,49.3,37.3,43,37.3z">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                        <h2 class="pricing-table__title">Business
                                                                            Horoscope</h2>
                                                                        <h4 class="pricing-table__subtitle">Contrary to
                                                                            popular belief, Lorem Ipsum is not simply
                                                                            random text.</h4>
                                                                    </div>
                                                                    <div class="pricing-table__price"><span
                                                                            class="pricing-table__price-prefix">$</span><span
                                                                            class="pricing-table__price-val">35.00</span><span
                                                                            class="pricing-table__price-suffix">$62.00
                                                                        </span></div>
                                                                    <div class="pricing-table__features">
                                                                        <div
                                                                            class="pricing-table__fold-mask pricing-table-unfold-state">
                                                                            <div
                                                                                class="pricing-feature pricing-feature-a38c26a item-included">
                                                                                <div class="pricing-feature__inner">
                                                                                    <span
                                                                                        class="item-bullet jet-elements-icon"><i
                                                                                            aria-hidden="true"
                                                                                            class="fas fa-check"></i></span><span
                                                                                        class="pricing-feature__text">Feature</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pricing-table__action">
                                                                        <a class="elementor-button elementor-size-md pricing-table-button button-auto-size"
                                                                            href="https://dtaugury.wpengine.com/appointment/">Order</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d53c44b dt-col-sm-6"
                                            data-id="d53c44b" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-2d57760 hide-feature elementor-widget elementor-widget-jet-pricing-table is-mac"
                                                        data-id="2d57760" data-element_type="widget"
                                                        data-widget_type="jet-pricing-table.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-jet-pricing-table jet-elements">
                                                                <div class="pricing-table ">
                                                                    <div class="pricing-table__heading">
                                                                        <div class="pricing-table__icon">
                                                                            <div class="pricing-table__icon-box"><span
                                                                                    class="jet-elements-icon"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                        x="0px" y="0px"
                                                                                        viewBox="0 0 110 95"
                                                                                        style="enable-background:new 0 0 110 95;"
                                                                                        xml:space="preserve">
                                                                                        <g id="Layer_1"
                                                                                            style="display:none;">
                                                                                            <g transform="translate(0,-952.36218)"
                                                                                                style="display:inline;">
                                                                                                <path
                                                                                                    d="M54.7,974.1c-30,0-53.8,24.2-53.8,24.2c-0.7,0.7-0.7,1.8,0,2.5c0,0,23.8,24.2,53.8,24.2s53.8-24.2,53.8-24.2    c0.7-0.7,0.7-1.8,0-2.5C108.5,998.3,84.7,974.1,54.7,974.1z M54.7,977.7c25.6,0,46.4,18.6,49.9,21.9c-3.5,3.3-24.2,21.9-49.9,21.9    c-25.6,0-46.3-18.6-49.9-21.9C8.4,996.3,29.1,977.7,54.7,977.7z M54.7,982.5c-9.5,0-17.2,7.7-17.2,17.1c0,9.4,7.7,17.1,17.2,17.1    c9.5,0,17.2-7.7,17.2-17.1C71.9,990.2,64.2,982.5,54.7,982.5z M54.7,986c7.6,0,13.6,6.1,13.6,13.6c0,7.5-6.1,13.6-13.6,13.6    c-7.6,0-13.6-6.1-13.6-13.6C41.1,992.1,47.2,986,54.7,986z M53.3,987.8v1.9c-0.8,0.1-1.6,0.3-2.3,0.6c-1.1,0.4-1.9,1.1-2.4,1.9    c-0.6,0.8-0.8,1.8-0.8,2.7c0,0.9,0.2,1.7,0.7,2.4c0.5,0.7,1.1,1.3,2.1,1.8c0.6,0.3,1.6,0.6,2.8,1v7c-0.4-0.1-0.8-0.2-1.1-0.3    c-0.9-0.4-1.5-0.9-2-1.5c-0.4-0.6-0.7-1.4-0.8-2.4l-2.4,0.2c0,1.3,0.4,2.4,1.1,3.5c0.7,1,1.6,1.8,2.8,2.3c0.7,0.3,1.5,0.5,2.5,0.6    v1.9h2.8v-1.8c1-0.1,2-0.3,2.9-0.7c1.1-0.5,2-1.2,2.5-2.1c0.6-0.9,0.9-1.9,0.9-2.9c0-1-0.3-1.9-0.8-2.7c-0.5-0.8-1.4-1.5-2.5-2    c-0.6-0.3-1.7-0.6-3-0.9V992c0.8,0.1,1.5,0.4,2,0.8c0.8,0.6,1.2,1.5,1.3,2.8l2.5-0.2c0-1.1-0.4-2.1-1-3c-0.6-0.9-1.4-1.6-2.5-2.1    c-0.7-0.3-1.4-0.4-2.2-0.6v-1.9L53.3,987.8L53.3,987.8z M53.3,991.9v5.5c-1.2-0.3-2-0.7-2.4-1c-0.5-0.4-0.7-1-0.7-1.7    c0-0.8,0.4-1.5,1.1-2.1C51.8,992.3,52.4,992,53.3,991.9L53.3,991.9z M56.1,1000.8c0.7,0.2,1.3,0.4,1.6,0.5    c0.8,0.3,1.4,0.7,1.7,1.1c0.4,0.5,0.6,1,0.6,1.6c0,0.6-0.2,1.2-0.6,1.7c-0.4,0.5-0.9,0.9-1.7,1.2c-0.5,0.2-1,0.3-1.6,0.4    L56.1,1000.8L56.1,1000.8z">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g id="Layer_2">
                                                                                            <g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M41.5,45.6h5.2v13c0,1.2,1,2.1,2.1,2.1h12.3c1.3,0,2.3-1,2.3-2.3V45.6h5.2V25c0-4.6-3.4-8.2-7.6-8.2H49     c-4.1,0-7.6,3.7-7.6,8.2V45.6z M44.3,25c0-3,2.1-5.3,4.7-5.3h11.9c2.6,0,4.7,2.4,4.7,5.3v17.7h-2.3v-9.3c0-0.9-0.6-1.4-1.4-1.4     s-1.4,0.6-1.4,1.4v24.5h-4.1V44.8c0-0.9-0.6-1.4-1.4-1.4s-1.4,0.6-1.4,1.4v13.2h-4V33.6c0-0.9-0.6-1.4-1.4-1.4s-1.4,0.6-1.4,1.4     v9.3h-2.3L44.3,25z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M54.9,15.4c4.3,0,7.7-3.3,7.7-7.4s-3.4-7.4-7.7-7.4S47.2,3.9,47.2,8S50.6,15.4,54.9,15.4z M54.9,3.4c2.7,0,4.9,2,4.9,4.6     s-2.1,4.6-4.9,4.6S50,10.6,50,8S52.2,3.4,54.9,3.4z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M37,78.3H9.8v15.6h28.6V79.7C38.4,79,37.9,78.3,37,78.3z M35.6,91H12.7v-9.9h22.9V91z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M98.5,78.3H71.4v15.6H100V79.7C100,79,99.4,78.3,98.5,78.3z M97.1,91H74.2v-9.9h22.9V91z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M69.2,65.7H40.6v14.2V94h28.6V79.8V65.7z M43.5,68.5h22.9v9.9H43.5V68.5z M66.4,91H43.5v-9.9h22.9V91z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M13.1,50.2h3.6v24.6h12V50.2h3.6c1.1,0,1.9-1.3,1.1-2.1l-9.6-15.3c-0.6-0.9-1.9-0.9-2.4,0l-9.6,15.3     C11.3,49.1,12,50.2,13.1,50.2z M22.7,36.2l7,11.2h-3.9V72h-6.3V47.4h-3.9L22.7,36.2z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M77.5,50.2h3.6v24.6h12V50.2h3.6c0.6,0,1-0.3,1.3-0.7c0.3-0.4,0.3-1,0-1.4l-9.6-15.3c-0.3-0.4-0.7-0.7-1.1-0.7     c-0.4,0-1,0.3-1.1,0.7l-9.6,15.3c-0.3,0.4-0.3,1,0,1.4C76.5,49.9,76.9,50.2,77.5,50.2z M87.1,36.2l7,11.2h-3.9V72H84V47.4h-3.9     L87.1,36.2z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g id="Layer_3"
                                                                                            style="display:none;">
                                                                                            <g style="display:inline;">
                                                                                                <path
                                                                                                    d="M96.1,73.5c-0.9,0-1.9-0.2-2.7-0.7c-3.3-1.7-5-5.9-5.5-9.1c-0.5-2.8-0.8-5.7-0.8-8.5c0-2.2-0.5-3.5-1-3.7    c-0.7-0.4-0.9-1.3-0.4-2c0.4-0.6,1.1-0.8,1.8-0.6c1.7,0.9,2.6,3.1,2.6,6.3c0,2.7,0.2,5.4,0.7,8.1c0.5,3.2,2.2,6,4,7    c0.9,0.5,1.9,0.5,2.8,0c0.2-0.7-0.1-2.8-0.3-4.1c-0.2-1.2-0.3-2.4-0.3-3.6V42.9c0-1.5-2.5-4.7-7.4-9.6s-4.4-8.8-3.6-11.3    c0.7-1.9,2.8-7,4.8-12C92.1,6.7,93.4,3.5,94,2c0.3-0.8,1.1-1.1,1.9-0.8S97,2.2,96.7,3c-0.6,1.6-1.9,4.8-3.3,8.2    c-1.9,4.7-4.1,10-4.7,11.8c-0.7,2-0.9,4.6,2.9,8.3c5.9,5.9,8.3,9.2,8.3,11.6v19.6c0,1.1,0.1,2.2,0.3,3.2c0.4,3.2,0.8,6-1.1,7    C98.2,73.3,97.2,73.5,96.1,73.5z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M67.4,93.2c-1,0-1.9-0.4-2.6-1.1c-3.3-3.3-0.2-8.2,2.1-11.8c0.5-0.8,1-1.7,1.5-2.5c1-2.1,5-11.5,5.7-13.3    c0.3-0.8,1.1-1.1,1.9-0.8c0.8,0.3,1.1,1.1,0.8,1.9c-0.7,2-4.9,11.5-5.8,13.4c-0.5,1-1,2-1.7,2.9c-1.7,2.8-4.1,6.6-2.5,8.2    c0.2,0.2,0.5,0.3,0.7,0.3c1.9-0.3,5.2-4.7,7.3-8.7c0.7-1.3,1.5-2.5,2.3-3.6c1.2-1.5,2.1-3.1,2.8-4.8c1.5-3.8,7.2-18.3,7.2-18.4    c0.3-0.8,1.1-1.1,1.9-0.8c0.8,0.3,1.1,1.1,0.8,1.9l0,0c-0.1,0.1-5.7,14.6-7.2,18.4c-0.8,2-1.9,3.8-3.2,5.5c-0.8,1-1.5,2.1-2.1,3.3    c-1.2,2.2-5.3,9.6-9.4,10.2C67.8,93.1,67.6,93.2,67.4,93.2z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M61.2,94c-1.3-0.1-2.6-0.6-3.5-1.5c-2.7-2.2-1.5-10-0.3-12.9c0.3-0.7,1.2-1.1,1.9-0.8c0.7,0.3,1.1,1.2,0.8,1.9    c-1.3,3-1.5,8.7-0.6,9.5c0.5,0.5,1.2,0.8,1.9,0.8c0.9-0.2,1.6-1.5,2.1-2.4l0.1-0.2c0.4-0.7,1.3-0.9,2-0.4c0.6,0.4,0.9,1.2,0.5,1.9    L66,90.2c-0.7,1.3-1.9,3.4-4.1,3.8C61.7,94,61.4,94,61.2,94z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M55.8,31.5c-0.8,0-1.5-0.7-1.5-1.5v-6c0-4.3,1.2-6.8,3.6-11.9l0.5-1.1c1.4-2.9,2.7-5.9,3.7-8.9c0.3-0.8,1.1-1.2,1.8-0.9    c0.7,0.2,1.1,1,0.9,1.8c-1.1,3.2-2.4,6.3-3.9,9.3l-0.5,1.1c-2.4,5-3.4,7.1-3.4,10.7v6C57.2,30.9,56.6,31.5,55.8,31.5z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M15.4,73.5c-1,0-2-0.3-2.9-0.7c-2-1-1.6-3.8-1.1-7c0.2-1.1,0.3-2.1,0.3-3.2V42.9c0-2.4,2.3-5.7,8.3-11.6    c3.8-3.8,3.6-6.3,2.9-8.3c-0.3-0.6-5.5-15.9-7.1-20c-0.3-0.8,0.1-1.6,0.8-1.9c0.8-0.3,1.6,0.1,1.9,0.8c1.6,4.2,6.8,19.4,7,20.1    c0.8,2.5,1.4,6.3-3.6,11.3s-7.4,8.1-7.4,9.6v19.7c0,1.2-0.2,2.4-0.3,3.6c-0.2,1.3-0.5,3.4-0.3,4.1c0.9,0.5,1.9,0.5,2.8,0    c1.8-0.9,3.5-3.8,4-7c0.5-2.7,0.7-5.4,0.7-8.1c0-3.2,0.7-5.2,2.2-6.2c0.7-0.3,1.6,0,1.9,0.7c0.3,0.6,0.1,1.3-0.4,1.7    c-0.3,0.2-0.8,1.4-0.8,3.7c0,2.9-0.3,5.7-0.8,8.5c-0.5,3.1-2.3,7.4-5.5,9.1C17.3,73.3,16.4,73.5,15.4,73.5z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M44.2,93.1c-0.2,0-0.4,0-0.6,0c-4.1-0.6-8.2-8-9.4-10.2c-0.6-1.1-1.3-2.2-2.1-3.3c-1.3-1.7-2.4-3.5-3.2-5.5    c-1.5-3.8-7.2-18.3-7.3-18.5c-0.3-0.7,0.1-1.6,0.8-1.9c0.7-0.3,1.6,0.1,1.9,0.8c0.1,0.1,5.7,14.6,7.2,18.4    c0.7,1.7,1.7,3.4,2.8,4.8c0.9,1.2,1.6,2.4,2.3,3.6c2.1,4,5.3,8.4,7.3,8.7c0.3,0.1,0.6,0,0.7-0.3c1.6-1.6-0.7-5.4-2.5-8.2    c-0.6-0.9-1.2-1.9-1.7-2.9c-0.8-1.9-5.1-11.6-5.7-13.4c-0.3-0.7,0.1-1.6,0.8-1.9c0.7-0.3,1.6,0.1,1.9,0.8    c0.7,1.7,4.9,11.4,5.7,13.2c0.4,0.9,0.9,1.7,1.5,2.5c2.2,3.6,5.3,8.6,2.1,11.8C46.1,92.7,45.1,93.1,44.2,93.1z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M50.7,93.7c-0.3,0-0.5,0-0.8-0.1c-2.4-0.5-3.9-2.9-4.5-4c-0.4-0.7-0.2-1.6,0.4-2s1.6-0.2,2,0.4c0,0,0,0.1,0.1,0.1    c0.4,0.7,1.4,2.3,2.5,2.5c0.8,0,1.5-0.3,2-0.8c0.8-0.7,0.4-6-0.9-9.2c-0.3-0.7,0-1.6,0.8-1.9c0.7-0.3,1.6,0,1.9,0.8    c0.8,2.1,3,10.3,0.1,12.6C53.3,93.2,52,93.7,50.7,93.7z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M55.8,49c-0.8,0-1.5-0.7-1.5-1.5V24c0-3.6-1-5.7-3.4-10.7l-0.5-1.1c-1.5-3-2.8-6.1-3.9-9.3c-0.2-0.8,0.2-1.6,1-1.8    c0.7-0.2,1.5,0.2,1.8,0.9c1.1,3.1,2.3,6,3.7,8.9l0.5,1.1c2.4,5.1,3.6,7.6,3.6,11.9v23.5C57.2,48.3,56.6,49,55.8,49z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M55.9,83.4c-0.3,0-0.6-0.1-0.9-0.3l-1.7-1.2c-8.6-6.2-24.5-17.9-24.5-33.3c0-7.8,6.4-14.2,14.2-14.2    c5.4,0,10.4,3.1,12.8,8c3.4-7,12-10,19-6.5c4.9,2.4,8,7.3,8,12.8c0,15.3-15.7,26.9-24.1,33.1l-1.9,1.4    C56.5,83.3,56.2,83.4,55.9,83.4z M43,37.3c-6.2,0-11.3,5.1-11.3,11.3c0,13.9,15.2,25,23.3,30.9l0.8,0.6l1-0.8    c8-5.9,22.9-16.9,22.9-30.8c0-6.2-5.1-11.3-11.3-11.3c-6.2,0-11.3,5.1-11.3,11.3c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5    C54.3,42.4,49.3,37.3,43,37.3z">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                        <h2 class="pricing-table__title">Career &amp;
                                                                            Job</h2>
                                                                        <h4 class="pricing-table__subtitle">Contrary to
                                                                            popular belief, Lorem Ipsum is not simply
                                                                            random text.</h4>
                                                                    </div>
                                                                    <div class="pricing-table__price"><span
                                                                            class="pricing-table__price-prefix">$</span><span
                                                                            class="pricing-table__price-val">42.00</span><span
                                                                            class="pricing-table__price-suffix">$50.00
                                                                        </span></div>
                                                                    <div class="pricing-table__features">
                                                                        <div
                                                                            class="pricing-table__fold-mask pricing-table-unfold-state">
                                                                            <div
                                                                                class="pricing-feature pricing-feature-a38c26a item-included">
                                                                                <div class="pricing-feature__inner">
                                                                                    <span
                                                                                        class="item-bullet jet-elements-icon"><i
                                                                                            aria-hidden="true"
                                                                                            class="fas fa-check"></i></span><span
                                                                                        class="pricing-feature__text">Feature</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pricing-table__action">
                                                                        <a class="elementor-button elementor-size-md pricing-table-button button-auto-size"
                                                                            href="https://dtaugury.wpengine.com/appointment/">Order</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-fba8599 dt-col-sm-6 dt-col-sm-offset-3"
                                            data-id="fba8599" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-5b47559 hide-feature elementor-widget elementor-widget-jet-pricing-table is-mac"
                                                        data-id="5b47559" data-element_type="widget"
                                                        data-widget_type="jet-pricing-table.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-jet-pricing-table jet-elements">
                                                                <div class="pricing-table ">
                                                                    <div class="pricing-table__heading">
                                                                        <div class="pricing-table__icon">
                                                                            <div class="pricing-table__icon-box"><span
                                                                                    class="jet-elements-icon"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                        x="0px" y="0px"
                                                                                        viewBox="0 0 110 95"
                                                                                        style="enable-background:new 0 0 110 95;"
                                                                                        xml:space="preserve">
                                                                                        <g id="Layer_1"
                                                                                            style="display:none;">
                                                                                            <g transform="translate(0,-952.36218)"
                                                                                                style="display:inline;">
                                                                                                <path
                                                                                                    d="M54.7,974.1c-30,0-53.8,24.2-53.8,24.2c-0.7,0.7-0.7,1.8,0,2.5c0,0,23.8,24.2,53.8,24.2s53.8-24.2,53.8-24.2    c0.7-0.7,0.7-1.8,0-2.5C108.5,998.3,84.7,974.1,54.7,974.1z M54.7,977.7c25.6,0,46.4,18.6,49.9,21.9c-3.5,3.3-24.2,21.9-49.9,21.9    c-25.6,0-46.3-18.6-49.9-21.9C8.4,996.3,29.1,977.7,54.7,977.7z M54.7,982.5c-9.5,0-17.2,7.7-17.2,17.1c0,9.4,7.7,17.1,17.2,17.1    c9.5,0,17.2-7.7,17.2-17.1C71.9,990.2,64.2,982.5,54.7,982.5z M54.7,986c7.6,0,13.6,6.1,13.6,13.6c0,7.5-6.1,13.6-13.6,13.6    c-7.6,0-13.6-6.1-13.6-13.6C41.1,992.1,47.2,986,54.7,986z M53.3,987.8v1.9c-0.8,0.1-1.6,0.3-2.3,0.6c-1.1,0.4-1.9,1.1-2.4,1.9    c-0.6,0.8-0.8,1.8-0.8,2.7c0,0.9,0.2,1.7,0.7,2.4c0.5,0.7,1.1,1.3,2.1,1.8c0.6,0.3,1.6,0.6,2.8,1v7c-0.4-0.1-0.8-0.2-1.1-0.3    c-0.9-0.4-1.5-0.9-2-1.5c-0.4-0.6-0.7-1.4-0.8-2.4l-2.4,0.2c0,1.3,0.4,2.4,1.1,3.5c0.7,1,1.6,1.8,2.8,2.3c0.7,0.3,1.5,0.5,2.5,0.6    v1.9h2.8v-1.8c1-0.1,2-0.3,2.9-0.7c1.1-0.5,2-1.2,2.5-2.1c0.6-0.9,0.9-1.9,0.9-2.9c0-1-0.3-1.9-0.8-2.7c-0.5-0.8-1.4-1.5-2.5-2    c-0.6-0.3-1.7-0.6-3-0.9V992c0.8,0.1,1.5,0.4,2,0.8c0.8,0.6,1.2,1.5,1.3,2.8l2.5-0.2c0-1.1-0.4-2.1-1-3c-0.6-0.9-1.4-1.6-2.5-2.1    c-0.7-0.3-1.4-0.4-2.2-0.6v-1.9L53.3,987.8L53.3,987.8z M53.3,991.9v5.5c-1.2-0.3-2-0.7-2.4-1c-0.5-0.4-0.7-1-0.7-1.7    c0-0.8,0.4-1.5,1.1-2.1C51.8,992.3,52.4,992,53.3,991.9L53.3,991.9z M56.1,1000.8c0.7,0.2,1.3,0.4,1.6,0.5    c0.8,0.3,1.4,0.7,1.7,1.1c0.4,0.5,0.6,1,0.6,1.6c0,0.6-0.2,1.2-0.6,1.7c-0.4,0.5-0.9,0.9-1.7,1.2c-0.5,0.2-1,0.3-1.6,0.4    L56.1,1000.8L56.1,1000.8z">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g id="Layer_2"
                                                                                            style="display:none;">
                                                                                            <g style="display:inline;">
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M41.5,45.6h5.2v13c0,1.2,1,2.1,2.1,2.1h12.3c1.3,0,2.3-1,2.3-2.3V45.6h5.2V25c0-4.6-3.4-8.2-7.6-8.2H49     c-4.1,0-7.6,3.7-7.6,8.2V45.6z M44.3,25c0-3,2.1-5.3,4.7-5.3h11.9c2.6,0,4.7,2.4,4.7,5.3v17.7h-2.3v-9.3c0-0.9-0.6-1.4-1.4-1.4     s-1.4,0.6-1.4,1.4v24.5h-4.1V44.8c0-0.9-0.6-1.4-1.4-1.4s-1.4,0.6-1.4,1.4v13.2h-4V33.6c0-0.9-0.6-1.4-1.4-1.4s-1.4,0.6-1.4,1.4     v9.3h-2.3L44.3,25z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M54.9,15.4c4.3,0,7.7-3.3,7.7-7.4s-3.4-7.4-7.7-7.4S47.2,3.9,47.2,8S50.6,15.4,54.9,15.4z M54.9,3.4c2.7,0,4.9,2,4.9,4.6     s-2.1,4.6-4.9,4.6S50,10.6,50,8S52.2,3.4,54.9,3.4z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M37,78.3H9.8v15.6h28.6V79.7C38.4,79,37.9,78.3,37,78.3z M35.6,91H12.7v-9.9h22.9V91z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M98.5,78.3H71.4v15.6H100V79.7C100,79,99.4,78.3,98.5,78.3z M97.1,91H74.2v-9.9h22.9V91z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M69.2,65.7H40.6v14.2V94h28.6V79.8V65.7z M43.5,68.5h22.9v9.9H43.5V68.5z M66.4,91H43.5v-9.9h22.9V91z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M13.1,50.2h3.6v24.6h12V50.2h3.6c1.1,0,1.9-1.3,1.1-2.1l-9.6-15.3c-0.6-0.9-1.9-0.9-2.4,0l-9.6,15.3     C11.3,49.1,12,50.2,13.1,50.2z M22.7,36.2l7,11.2h-3.9V72h-6.3V47.4h-3.9L22.7,36.2z">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <g>
                                                                                                    <path
                                                                                                        d="M77.5,50.2h3.6v24.6h12V50.2h3.6c0.6,0,1-0.3,1.3-0.7c0.3-0.4,0.3-1,0-1.4l-9.6-15.3c-0.3-0.4-0.7-0.7-1.1-0.7     c-0.4,0-1,0.3-1.1,0.7l-9.6,15.3c-0.3,0.4-0.3,1,0,1.4C76.5,49.9,76.9,50.2,77.5,50.2z M87.1,36.2l7,11.2h-3.9V72H84V47.4h-3.9     L87.1,36.2z">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                        <g id="Layer_3">
                                                                                            <g>
                                                                                                <path
                                                                                                    d="M96.1,73.5c-0.9,0-1.9-0.2-2.7-0.7c-3.3-1.7-5-5.9-5.5-9.1c-0.5-2.8-0.8-5.7-0.8-8.5c0-2.2-0.5-3.5-1-3.7    c-0.7-0.4-0.9-1.3-0.4-2c0.4-0.6,1.1-0.8,1.8-0.6c1.7,0.9,2.6,3.1,2.6,6.3c0,2.7,0.2,5.4,0.7,8.1c0.5,3.2,2.2,6,4,7    c0.9,0.5,1.9,0.5,2.8,0c0.2-0.7-0.1-2.8-0.3-4.1c-0.2-1.2-0.3-2.4-0.3-3.6V42.9c0-1.5-2.5-4.7-7.4-9.6s-4.4-8.8-3.6-11.3    c0.7-1.9,2.8-7,4.8-12C92.1,6.7,93.4,3.5,94,2c0.3-0.8,1.1-1.1,1.9-0.8S97,2.2,96.7,3c-0.6,1.6-1.9,4.8-3.3,8.2    c-1.9,4.7-4.1,10-4.7,11.8c-0.7,2-0.9,4.6,2.9,8.3c5.9,5.9,8.3,9.2,8.3,11.6v19.6c0,1.1,0.1,2.2,0.3,3.2c0.4,3.2,0.8,6-1.1,7    C98.2,73.3,97.2,73.5,96.1,73.5z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M67.4,93.2c-1,0-1.9-0.4-2.6-1.1c-3.3-3.3-0.2-8.2,2.1-11.8c0.5-0.8,1-1.7,1.5-2.5c1-2.1,5-11.5,5.7-13.3    c0.3-0.8,1.1-1.1,1.9-0.8c0.8,0.3,1.1,1.1,0.8,1.9c-0.7,2-4.9,11.5-5.8,13.4c-0.5,1-1,2-1.7,2.9c-1.7,2.8-4.1,6.6-2.5,8.2    c0.2,0.2,0.5,0.3,0.7,0.3c1.9-0.3,5.2-4.7,7.3-8.7c0.7-1.3,1.5-2.5,2.3-3.6c1.2-1.5,2.1-3.1,2.8-4.8c1.5-3.8,7.2-18.3,7.2-18.4    c0.3-0.8,1.1-1.1,1.9-0.8c0.8,0.3,1.1,1.1,0.8,1.9l0,0c-0.1,0.1-5.7,14.6-7.2,18.4c-0.8,2-1.9,3.8-3.2,5.5c-0.8,1-1.5,2.1-2.1,3.3    c-1.2,2.2-5.3,9.6-9.4,10.2C67.8,93.1,67.6,93.2,67.4,93.2z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M61.2,94c-1.3-0.1-2.6-0.6-3.5-1.5c-2.7-2.2-1.5-10-0.3-12.9c0.3-0.7,1.2-1.1,1.9-0.8c0.7,0.3,1.1,1.2,0.8,1.9    c-1.3,3-1.5,8.7-0.6,9.5c0.5,0.5,1.2,0.8,1.9,0.8c0.9-0.2,1.6-1.5,2.1-2.4l0.1-0.2c0.4-0.7,1.3-0.9,2-0.4c0.6,0.4,0.9,1.2,0.5,1.9    L66,90.2c-0.7,1.3-1.9,3.4-4.1,3.8C61.7,94,61.4,94,61.2,94z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M55.8,31.5c-0.8,0-1.5-0.7-1.5-1.5v-6c0-4.3,1.2-6.8,3.6-11.9l0.5-1.1c1.4-2.9,2.7-5.9,3.7-8.9c0.3-0.8,1.1-1.2,1.8-0.9    c0.7,0.2,1.1,1,0.9,1.8c-1.1,3.2-2.4,6.3-3.9,9.3l-0.5,1.1c-2.4,5-3.4,7.1-3.4,10.7v6C57.2,30.9,56.6,31.5,55.8,31.5z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M15.4,73.5c-1,0-2-0.3-2.9-0.7c-2-1-1.6-3.8-1.1-7c0.2-1.1,0.3-2.1,0.3-3.2V42.9c0-2.4,2.3-5.7,8.3-11.6    c3.8-3.8,3.6-6.3,2.9-8.3c-0.3-0.6-5.5-15.9-7.1-20c-0.3-0.8,0.1-1.6,0.8-1.9c0.8-0.3,1.6,0.1,1.9,0.8c1.6,4.2,6.8,19.4,7,20.1    c0.8,2.5,1.4,6.3-3.6,11.3s-7.4,8.1-7.4,9.6v19.7c0,1.2-0.2,2.4-0.3,3.6c-0.2,1.3-0.5,3.4-0.3,4.1c0.9,0.5,1.9,0.5,2.8,0    c1.8-0.9,3.5-3.8,4-7c0.5-2.7,0.7-5.4,0.7-8.1c0-3.2,0.7-5.2,2.2-6.2c0.7-0.3,1.6,0,1.9,0.7c0.3,0.6,0.1,1.3-0.4,1.7    c-0.3,0.2-0.8,1.4-0.8,3.7c0,2.9-0.3,5.7-0.8,8.5c-0.5,3.1-2.3,7.4-5.5,9.1C17.3,73.3,16.4,73.5,15.4,73.5z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M44.2,93.1c-0.2,0-0.4,0-0.6,0c-4.1-0.6-8.2-8-9.4-10.2c-0.6-1.1-1.3-2.2-2.1-3.3c-1.3-1.7-2.4-3.5-3.2-5.5    c-1.5-3.8-7.2-18.3-7.3-18.5c-0.3-0.7,0.1-1.6,0.8-1.9c0.7-0.3,1.6,0.1,1.9,0.8c0.1,0.1,5.7,14.6,7.2,18.4    c0.7,1.7,1.7,3.4,2.8,4.8c0.9,1.2,1.6,2.4,2.3,3.6c2.1,4,5.3,8.4,7.3,8.7c0.3,0.1,0.6,0,0.7-0.3c1.6-1.6-0.7-5.4-2.5-8.2    c-0.6-0.9-1.2-1.9-1.7-2.9c-0.8-1.9-5.1-11.6-5.7-13.4c-0.3-0.7,0.1-1.6,0.8-1.9c0.7-0.3,1.6,0.1,1.9,0.8    c0.7,1.7,4.9,11.4,5.7,13.2c0.4,0.9,0.9,1.7,1.5,2.5c2.2,3.6,5.3,8.6,2.1,11.8C46.1,92.7,45.1,93.1,44.2,93.1z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M50.7,93.7c-0.3,0-0.5,0-0.8-0.1c-2.4-0.5-3.9-2.9-4.5-4c-0.4-0.7-0.2-1.6,0.4-2s1.6-0.2,2,0.4c0,0,0,0.1,0.1,0.1    c0.4,0.7,1.4,2.3,2.5,2.5c0.8,0,1.5-0.3,2-0.8c0.8-0.7,0.4-6-0.9-9.2c-0.3-0.7,0-1.6,0.8-1.9c0.7-0.3,1.6,0,1.9,0.8    c0.8,2.1,3,10.3,0.1,12.6C53.3,93.2,52,93.7,50.7,93.7z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M55.8,49c-0.8,0-1.5-0.7-1.5-1.5V24c0-3.6-1-5.7-3.4-10.7l-0.5-1.1c-1.5-3-2.8-6.1-3.9-9.3c-0.2-0.8,0.2-1.6,1-1.8    c0.7-0.2,1.5,0.2,1.8,0.9c1.1,3.1,2.3,6,3.7,8.9l0.5,1.1c2.4,5.1,3.6,7.6,3.6,11.9v23.5C57.2,48.3,56.6,49,55.8,49z">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M55.9,83.4c-0.3,0-0.6-0.1-0.9-0.3l-1.7-1.2c-8.6-6.2-24.5-17.9-24.5-33.3c0-7.8,6.4-14.2,14.2-14.2    c5.4,0,10.4,3.1,12.8,8c3.4-7,12-10,19-6.5c4.9,2.4,8,7.3,8,12.8c0,15.3-15.7,26.9-24.1,33.1l-1.9,1.4    C56.5,83.3,56.2,83.4,55.9,83.4z M43,37.3c-6.2,0-11.3,5.1-11.3,11.3c0,13.9,15.2,25,23.3,30.9l0.8,0.6l1-0.8    c8-5.9,22.9-16.9,22.9-30.8c0-6.2-5.1-11.3-11.3-11.3c-6.2,0-11.3,5.1-11.3,11.3c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5    C54.3,42.4,49.3,37.3,43,37.3z">
                                                                                                </path>
                                                                                            </g>
                                                                                        </g>
                                                                                    </svg></span></div>
                                                                        </div>
                                                                        <h2 class="pricing-table__title">Love Horoscope
                                                                        </h2>
                                                                        <h4 class="pricing-table__subtitle">Contrary to
                                                                            popular belief, Lorem Ipsum is not simply
                                                                            random text.</h4>
                                                                    </div>
                                                                    <div class="pricing-table__price"><span
                                                                            class="pricing-table__price-prefix">$</span><span
                                                                            class="pricing-table__price-val">50.00</span><span
                                                                            class="pricing-table__price-suffix">$75.00
                                                                        </span></div>
                                                                    <div class="pricing-table__features">
                                                                        <div
                                                                            class="pricing-table__fold-mask pricing-table-unfold-state">
                                                                            <div
                                                                                class="pricing-feature pricing-feature-a38c26a item-included">
                                                                                <div class="pricing-feature__inner">
                                                                                    <span
                                                                                        class="item-bullet jet-elements-icon"><i
                                                                                            aria-hidden="true"
                                                                                            class="fas fa-check"></i></span><span
                                                                                        class="pricing-feature__text">Feature</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pricing-table__action">
                                                                        <a class="elementor-button elementor-size-md pricing-table-button button-auto-size"
                                                                            href="https://dtaugury.wpengine.com/appointment/">Order</a>
                                                                    </div>
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
                                class="elementor-section elementor-top-section elementor-element elementor-element-3ec58a0 elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section"
                                data-id="3ec58a0" data-element_type="section"
                                data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;49984c5&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;]}]}">
                                <div
                                    class="jet-parallax-section__layout elementor-repeater-item-49984c5 jet-parallax-section__scroll-layout is-mac">
                                    <div class="jet-parallax-section__image"
                                        style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(166.1px);">
                                    </div>
                                </div>
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-row">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fb1fb11"
                                            data-id="fb1fb11" data-element_type="column">
                                            <div class="elementor-column-wrap elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-208c872 elementor-widget elementor-widget-spacer is-mac"
                                                        data-id="208c872" data-element_type="widget"
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
            </div><!-- #post-20670 -->
        </section>
    </div>
    <!-- ** Container End ** -->

</div>

@endsection

@section('footer')
@include('FrontClient.panels.footer')
@endsection
