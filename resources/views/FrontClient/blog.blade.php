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
                        <h3 style="color:#4e9d43">@lang('client.blog.title')</h3>
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
            <!-- #post-20413 -->
            <div id="post-20413" class="post-20413 page type-page status-publish" style="color:#4e9d43">
                <div class="tab">
                    @foreach($wisdom_type as $row)
                    @foreach($wisdom_data as $item)
                        @if($item->type_id==$row->id)
                        <button class="tablinks" onclick="openCity(event, {{$row->id}})"><b>{!! $row->type_name_th !!}</b></button>

                        <!-- <button class="tablinks" disabled> {!! $row->type_name_th !!}</button> -->
                        @endif
                    @endforeach
                    @endforeach
                </div>
                @foreach($wisdom_type as $rows)
                <div id="{{ $rows->id}}" class="tabcontent" style="min-height:220px;">
                    @foreach($wisdom_data as $item)
                        @if($item->type_id==$rows->id)
                            <h3>{!! $item->subject_th !!}</h3>
                            <p>{!! $item->desc_th !!}</p>
                        @endif
                    @endforeach
                </div>
                @endforeach

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
