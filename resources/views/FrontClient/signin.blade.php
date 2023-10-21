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
                        <h3 style="color:#4e9d43">@lang('client.signin.title')</h3>
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
            <div id="post-20413" class="post-20413 page type-page status-publish " style="color:#4e9d43">
                <div class="col-w-100 col-md-w-50" style="margin:0 auto;">

                <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group w-100">
                            <h6>เบอร์โทรศัพท์ *</h6>
                            <input type="text" class="form-control" maxlength="10" oninput="this.value = this.value.replace(/[^0-9_ ]/g, '');" name="phone">
                        </div>
                        <div class="form-group w-100">
                            <h6>รหัสผ่าน *</h6>
                            <input type="text" class="form-control" oninput="this.value = this.value.replace(/[^0-9_]/g, '');" name="password">
                        </div>
                        <div class="form-group w-100">
                            <a href="{{url("signup")}}">
                            <u><h6>สมัครสมาชิก</h6></u>
                            </a>
                        </div>
                        <button class="btn btn-warning w-100" style="margin-top:20px;font-weight: 600;font-size: 2rem;">
                            ตกลง
                        </button>
                    </form>
                </div>
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
