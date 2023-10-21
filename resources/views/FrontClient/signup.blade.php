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
                        <h3 style="color:#4e9d43">@lang('client.signup.title')</h3>
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
                    <form action="{{ route('signup.store')}}" method="post">
                        @csrf
                        <div class="form-group w-100">
                            <div style="display:flex; align-items:center;justify-content:between;">
                                <div style="width:48%">
                                    <h6>ชื่อ (First Name)*</h6>
                                    <input type="text" class="form-control" name="name"
                                        oninput="this.value = this.value.replace(/[0-9_ ]/g, '');">
                                </div>
                                <div style="width:48%;margin-left:4%;">
                                    <h6>นามสกุล (Last Name)*</h6>
                                    <input type="text" class="form-control" name="lastName"
                                        oninput="this.value = this.value.replace(/[0-9_ ]/g, '');">
                                        <input type="hidden"  name="address" value="ว่าง">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group w-100">
                            <h6>ทีอยู่ (Address)*</h6>
                            <textarea id="" cols="30" rows="4" class="form-control" name="address"
                                placeholder="บ้านเลขที่ 123/4"></textarea>
                        </div> -->
                        <div class="form-group w-100">
                            <div style="display:flex; align-items:center;justify-content:between;">
                                <div style="width:68%">
                                    <h6>วัน/เดือน/ปีเกิด *</h6>
                                    <input type="date" class="form-control" name="d_time" style="background:#fff;">
                                </div>
                                <div style="width:30%;margin-left:4%;">
                                    <h6>เวลาเกิด *</h6>
                                    <input type="time" class="form-control p-2" name="b_time" style="background:#fff;    padding: 1.1rem;">
                                </div>
                            </div>
                            <div class="form-group w-100">
                                <h6>อีเมล์ (E-mail)*</h6>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group w-100">
                                <h6>เบอร์โทร (Phone Number)*</h6>
                                <input type="text" class="form-control" name="phone"
                                    oninput="this.value = this.value.replace(/[^0-9_]/g, '');">
                            </div>
                            <div class="form-group w-100">
                                <h6>รหัสผ่าน (Password)*</h6>
                                <input type="text" class="form-control" name="password">
                            </div>
                            <div class="form-group w-100">
                                <a href="{{url("signin")}}">
                                    <u>
                                        <h6>เข้าระบบ</h6>
                                    </u>
                                </a>
                            </div>
                            <button class="btn btn-warning w-100"
                                style="margin-top:20px;font-weight: 600;font-size: 2rem;">
                                ตกลง
                            </button>
                    </form>
                </div>
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
