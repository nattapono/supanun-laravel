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
                        <h3 style="color:#4e9d43">@lang('client.activity.calendar')</h3>
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
                <section id="primary" class="content-full-width">	<!-- #post-20413 -->
                @if(isset($data_calendar))
                    @foreach($data_calendar as $item)
                    <h4><b style="border-left:solid 4px #4e9d43; padding-left:10px;"> {{ $item->ac_name_th }}</b> <b>{{ date('d/m/Y', strtotime($item->ac_day)) }}</b>
                    <br><small>{!! app()->getLocale()=='th'? $item->ac_desc_th : $item->ac_desc_ch !!}</small></h4>
                    @endforeach
                @endif
                    <div id="post-20413" class="post-20413 page type-page status-publish" style="color:#4e9d43">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, esse provident! Voluptate, consequatur quas repellat possimus quae illo obcaecati natus eum dolor similique, doloribus unde voluptatibus molestias neque porro! Deserunt!
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
