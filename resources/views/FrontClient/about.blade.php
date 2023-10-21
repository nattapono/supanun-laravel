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
                        <h3>@lang('client.about.title')</h3>
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
                <section id="primary" class="content-full-width">	<!-- #post-20413 -->
                    <div id="post-20413" class="post-20413 page type-page status-publish " style="padding:10px;white-space: pre-line;">
                        {!! $lecturers_data[0]['description'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ** Container End ** -->

@endsection

@section('footer')
    @include('FrontClient.panels.footer')
@endsection
