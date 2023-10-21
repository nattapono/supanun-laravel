 <!-- ** Header Wrapper ** -->

 <?php
    $h_active='';
    $f_active='';
    $a_active='';
    $b_active='';
    $ab_active='';
    $p_active='';
    $c_active='';
    $h_active='';
 ?>

@if(Route::currentRouteName() == 'forecast')
 <?php $f_active = 'current_page_item'; ?>
@endif
@if(Route::currentRouteName() == 'home')
    <?php $h_active = 'current_page_item'; ?>
@endif
@if(Route::currentRouteName() == 'calendar' || Route::currentRouteName() == 'video' || Route::currentRouteName() == 'album')
    <?php $a_active = 'current_page_item'; ?>
@endif
@if(Route::currentRouteName() == 'blog')
    <?php $b_active = 'current_page_item'; ?>
@endif
@if(Route::currentRouteName() == 'about')
    <?php $ab_active = 'current_page_item'; ?>
@endif
@if(Route::currentRouteName() == 'payment')
    <?php $p_active = 'current_page_item'; ?>
@endif
@if(Route::currentRouteName() == 'contact')
    <?php $c_active = 'current_page_item'; ?>
@endif
@if(Route::currentRouteName() == 'history')
    <?php $h_active = 'current_page_item'; ?>
@endif


 <div id="header-wrapper" class="header-top-absolute">
     <!-- **Header** -->
     <header id="header">
         <div class="" id="container">
             <div id="header-20376" class="dt-header-tpl header-20376">
                 <div data-elementor-type="wp-post" data-elementor-id="20376" class="elementor elementor-20376">
                     <div class="elementor-inner">
                         <div class="elementor-section-wrap">
                             <section
                                 class="elementor-section elementor-top-section elementor-element elementor-element-967d606 elementor-section-content-middle elementor-section-stretched header-top-section elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                 data-id="967d606" data-element_type="section"
                                 data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;9e4bd5c&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}],&quot;background_background&quot;:&quot;classic&quot;,&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                 <div class="elementor-background-overlay"></div>
                                 <div class="elementor-container elementor-column-gap-default">
                                     <div class="elementor-row">
                                         <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-ae9f314"
                                             data-id="ae9f314" data-element_type="column">
                                             <div class="elementor-column-wrap elementor-element-populated">
                                                 <div class="elementor-widget-wrap">
                                                     <div class="elementor-element elementor-element-1aab21f elementor-widget elementor-widget-dt-logo"
                                                         data-id="1aab21f" data-element_type="widget"
                                                         data-widget_type="dt-logo.default">
                                                         <div class="elementor-widget-container">
                                                             <div id="dt-1aab21f"
                                                                 class="dt-logo-container logo-align-left">
                                                                 <a href="{{url('/history')}}/" rel="home"
                                                                     class="text-nowrap" style="color:#4e9d43">
                                                                     <img width="100"
                                                                         src="https://ศรีภุชงค์ทรัพย์อนันต.com/resources/img/logo/logo-1.png"
                                                                         class="attachment-full size-full" alt=""
                                                                         decoding="async"
                                                                         srcset="https://ศรีภุชงค์ทรัพย์อนันต.com/resources/img/logo/logo-1.png 100w, https://ศรีภุชงค์ทรัพย์อนันต.com/resources/img/logo/logo-1.png 100w"
                                                                         sizes="(max-width: 100px) 100vw, 100px"
                                                                         style="width:100px" />
                                                                     @lang('client.global.title')
                                                                 </a>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-ade9608 hide-res-sm"
                                             data-id="ade9608" data-element_type="column">
                                             <div class="elementor-column-wrap elementor-element-populated">
                                                 <!-- <div class="elementor-widget-wrap">
                                                     <div class="elementor-element elementor-element-d291e16 elementor-view-framed elementor-position-left header-contact-info elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                         data-id="d291e16" data-element_type="widget"
                                                         data-widget_type="icon-box.default">
                                                         <div class="elementor-widget-container">
                                                             <div class="elementor-icon-box-wrapper">
                                                                 <div class="elementor-icon-box-icon">
                                                                     <a class="elementor-icon elementor-animation-"
                                                                         href="{{url('/history')}}/contact-us/">
                                                                         <svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             x="0px" y="0px" viewBox="0 0 350 500"
                                                                             style="enable-background:new 0 0 350 500;"
                                                                             xml:space="preserve">
                                                                             <g transform="translate(0,-952.36218)">
                                                                                 <path
                                                                                     d="M174.9,952.4c-77-0.5-148,51.1-168.9,129.5c-4.7,17.7-5.9,35.1-5.8,51.8c0.3,59.2,31.8,110.3,67.4,159.9   c35.6,49.6,75.7,98.5,97.1,151.9c2.4,5.8,9,8.5,14.8,6.1c2.7-1.2,4.9-3.3,6-6.1c21.4-53.4,61.5-102.3,97.1-151.9   c35.6-49.6,67.1-100.7,67.4-159.9c0.1-16.7-1.1-34.1-5.8-51.8c-20.9-78.3-91.9-130-168.9-129.5C175.1,952.4,175,952.4,174.9,952.4z    M174.9,975.1c0.1,0,0.2,0,0.4,0c67-0.6,128.8,44.2,147,112.6c4,15,5.2,30.4,5.1,45.9c-0.2,51-28.2,97.8-63.2,146.6   c-30.5,42.5-65.2,86.2-89.1,135.2c-24-48.9-58.6-92.7-89.1-135.2c-35-48.7-62.9-95.6-63.2-146.6c-0.1-15.4,1.1-30.9,5.1-45.9   C46.1,1019.3,107.8,974.6,174.9,975.1z M174.7,1054.1c-39.9-0.1-72.6,32.8-72.6,72.9c0.1,40.2,32.8,72.9,72.7,72.9   c39.9,0.1,72.4-32.6,72.4-72.7C247.2,1087,214.6,1054.1,174.7,1054.1z M174.7,1076.9c27.7,0,49.9,22.5,50,50.3   c0,27.9-22.3,50-50,50c-27.7,0-49.9-22.3-50-50.2C124.7,1099.2,147,1076.8,174.7,1076.9z">
                                                                                 </path>
                                                                             </g>
                                                                         </svg>
                                                                     </a>
                                                                 </div>
                                                                 <div class="elementor-icon-box-content">
                                                                     <h3 class="elementor-icon-box-title">
                                                                         <a href="{{url('/history')}}/contact-us/">
                                                                             Reach Us </a>
                                                                     </h3>
                                                                     <p class="elementor-icon-box-description">
                                                                         113, JA Street, USA
                                                                     </p>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div> -->
                                             </div>
                                         </div>
                                         <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-9d6d8b9 hide-res-sm"
                                             data-id="9d6d8b9" data-element_type="column">
                                             <div class="elementor-column-wrap elementor-element-populated">
                                                 <div class="elementor-widget-wrap">
                                                     <!-- <div class="elementor-element elementor-element-24e37b9 elementor-view-framed elementor-position-left header-contact-info elementor-shape-circle elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                                         data-id="24e37b9" data-element_type="widget"
                                                         data-widget_type="icon-box.default">
                                                         <div class="elementor-widget-container">
                                                             <div class="elementor-icon-box-wrapper">
                                                                 <div class="elementor-icon-box-icon">
                                                                     <a class="elementor-icon elementor-animation-"
                                                                         href="{{url('/history')}}/contact-us/">
                                                                         <svg xmlns="http://www.w3.org/2000/svg"
                                                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             x="0px" y="0px" viewBox="0 0 500 500"
                                                                             style="enable-background:new 0 0 500 500;"
                                                                             xml:space="preserve">
                                                                             <style type="text/css">
                                                                             .st0 {
                                                                                 display: none;
                                                                             }

                                                                             .st1 {
                                                                                 display: inline;
                                                                             }
                                                                             </style>
                                                                             <g class="st0">
                                                                                 <g transform="translate(0,-952.36218)"
                                                                                     class="st1">
                                                                                     <path
                                                                                         d="M265.2,951.4c-77.6-0.5-149.1,51.1-170.2,129.5c-4.8,17.7-6,35.1-5.9,51.8c0.3,59.2,32.1,110.3,67.9,159.9    c35.9,49.6,76.3,98.5,97.8,151.9c2.4,5.8,9.1,8.5,14.9,6.1c2.7-1.2,4.9-3.3,6.1-6.1c21.5-53.4,62-102.3,97.8-151.9    c35.9-49.6,67.7-100.7,67.9-159.9c0.1-16.7-1.1-34.1-5.9-51.8c-21.1-78.3-92.6-130-170.2-129.5    C265.4,951.4,265.3,951.4,265.2,951.4z M265.2,974.1c0.1,0,0.2,0,0.4,0c67.5-0.6,129.7,44.2,148.2,112.6c4,15,5.2,30.4,5.2,45.9    c-0.3,51-28.4,97.8-63.7,146.6c-30.7,42.5-65.7,86.2-89.8,135.2c-24.2-48.9-59.1-92.7-89.8-135.2c-35.2-48.7-63.4-95.6-63.7-146.6    c-0.1-15.4,1.1-30.9,5.2-45.9C135.5,1018.3,197.6,973.6,265.2,974.1z M265,1053.1c-40.2-0.1-73.2,32.8-73.1,72.9    c0.1,40.2,33.1,72.9,73.3,72.9c40.2,0.1,73-32.6,72.9-72.7C338.1,1086,305.2,1053.1,265,1053.1z M265,1075.9    c27.9,0,50.3,22.5,50.3,50.3c0,27.9-22.4,50-50.3,50c-27.9,0-50.3-22.3-50.3-50.2C214.7,1098.2,237.1,1075.8,265,1075.9z">
                                                                                     </path>
                                                                                 </g>
                                                                             </g>
                                                                             <g>
                                                                                 <path
                                                                                     d="M343.4,498c-65.2,0-137-40.6-219.3-122.8c-80.9-80.8-122-155.8-122-222.8c0-43.2,16.8-81.9,50-115   c14.8-14.7,32.7-26.1,52.4-33.2C117.3-0.4,131.6,4,139.6,15l62.2,86.4c9.3,13,6.9,31.1-5.5,41.2l-49.4,38.7c-2.7,2-3.5,5.8-1.8,8.7   c20.6,33.2,45,63.9,72.8,91.4c27.5,27.8,58.3,52.2,91.6,72.7c2.9,1.7,6.7,1,8.8-1.8l38.5-49.1c10.1-12.6,28.3-15.1,41.4-5.7   l86.6,62.1c11.1,7.9,15.5,22.3,10.8,35.1c-3.6,9.8-8.3,19.3-13.9,28.1c-5.6,8.7-12,16.8-19.4,24.1c-3.9,3.9-8.1,7.6-12.5,11.1   C416.1,484.6,380.8,498,343.4,498z M113.9,35.9c-14.4,5.5-27.6,14-38.5,24.8c-26.8,26.7-40.3,57.6-40.3,91.6   c0,58,37.8,125.1,112.3,199.4c150,149.7,229.6,121.5,282.1,80.2c3.3-2.6,6.5-5.5,9.6-8.5c5.6-5.6,10.6-11.8,14.8-18.5   c4-6.3,7.3-13,10-19.9L381,325.9l-36.8,46.8c-12.4,15.9-34.7,20-51.9,9.6h0c-35.5-21.9-68.4-47.9-97.7-77.5   c-29.7-29.3-55.7-62-77.7-97.5c-10.4-17.2-6.3-39.5,9.6-51.9l46.9-36.7L113.9,35.9z">
                                                                                 </path>
                                                                             </g>
                                                                         </svg>
                                                                     </a>
                                                                 </div>
                                                                 <div class="elementor-icon-box-content">
                                                                     <h3 class="elementor-icon-box-title">
                                                                         <a href="{{url('/history')}}/contact-us/">
                                                                             Talk to Astrologers
                                                                         </a>
                                                                     </h3>
                                                                     <p class="elementor-icon-box-description">
                                                                         <a href="tel:+12025550181">+1-202-555-0181</a>
                                                                     </p>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div> -->
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-71ffb9b"
                                             data-id="71ffb9b" data-element_type="column">
                                             <div class="elementor-column-wrap elementor-element-populated">
                                                 <div class="elementor-widget-wrap">
                                                     <div class="elementor-element elementor-element-df1e196 elementor-align-center elementor-widget elementor-widget-button"
                                                         data-id="df1e196" data-element_type="widget"
                                                         data-widget_type="button.default">
                                                         <div class="elementor-widget-container">
                                                             <div class="dt-header-menu" data-menu="16">
                                                                 <div class="menu-container">
                                                                     <ul id="menu-main-menu" class="dt-primary-nav"
                                                                         data-menu="16">
                                                                         <li id="menu-item-25187"
                                                                             class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25187 menu-item-depth-0">
                                                                             <a href="#">
                                                                                 <span>{{ app()->getLocale()=='th'?'ไทย':'中國'}}</span>
                                                                             </a>
                                                                             <ul class="sub-menu is-hidden animate dt_fadeInLeft"
                                                                                 data-animation="animate dt_fadeInLeft"
                                                                                 style="width:90px">
                                                                                 <li class="close-nav"></li>
                                                                                 <li class="go-back"><a
                                                                                         href="javascript:void(0);"></a>
                                                                                 </li>
                                                                                 <li class="see-all"></li>
                                                                                 <li id="menu-item-20585"
                                                                                     class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20585 menu-item-depth-1">
                                                                                     <a href="{{url('/client/th')}}"><span>ไทย</span></a>
                                                                                 </li>
                                                                                 <li id="menu-item-20637"
                                                                                     class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20637 menu-item-depth-1">
                                                                                     <a href="{{url('/client/ch')}}"><span>中國</span></a>
                                                                                 </li>
                                                                             </ul>
                                                                         </li>
                                                                     </ul>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         @if(Auth::user())
                                         @if(auth()->user()->is_admin=='1')
                                         <script>
                                         window.location = '/signin';
                                         </script>
                                         @endif
                                         <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-2020208 dt-sc-dropbar-section"
                                             data-id="2020208" data-element_type="column">
                                             <div class="elementor-column-wrap elementor-element-populated">
                                                 <div class="elementor-widget-wrap">
                                                     <a>
                                                         <form action="{{route('logout') }}" method="post">
                                                             @csrf
                                                             <small class="btn text-success text-nowrap"
                                                                 style="color:#4e9d43"><b>{{auth()->user()->name .' '. auth()->user()->last_name}}</b>
                                                             </small>
                                                         </form>
                                                     </a>
                                                     <div class="elementor-element elementor-element-21dbe73 header-author elementor-widget elementor-widget-image"
                                                         data-id="21dbe73" data-element_type="widget"
                                                         data-widget_type="image.default">
                                                         <div class="elementor-widget-container">
                                                             <div class="elementor-image">
                                                                 <a href="{{url('/logout')}}">
                                                                     <img src="https://ศรีภุชงค์ทรัพย์อนันต.com/resources/img/user.jpg"
                                                                         title="author-img" alt="author-img"
                                                                         loading="lazy" /> </a>
                                                             </div>
                                                         </div>
                                                     </div>

                                                     <div class="elementor-element elementor-element-9402cb7 jet-dropbar-position-bottom-center dt-sc-dropbar elementor-widget elementor-widget-jet-dropbar"
                                                         data-id="9402cb7" data-element_type="widget"
                                                         data-widget_type="jet-dropbar.default">
                                                         <div class="elementor-widget-container">
                                                             <div class="elementor-jet-dropbar jet-elements">
                                                                 <div class="jet-dropbar jet-dropbar--slide-up-effect"
                                                                     data-settings="{&quot;mode&quot;:&quot;hover&quot;,&quot;hide_delay&quot;:500}">
                                                                     <div class="jet-dropbar__inner">
                                                                         <button class="jet-dropbar__button"><span
                                                                                 class="jet-dropbar__button-text">Dropbar</span></button>
                                                                         <div class="jet-dropbar__content-wrapper">
                                                                             <div class="jet-dropbar__content">
                                                                                 <div data-elementor-type="page"
                                                                                     data-elementor-id="20488"
                                                                                     class="elementor elementor-20488">
                                                                                     <div class="elementor-inner">
                                                                                         <div
                                                                                             class="elementor-section-wrap">
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
                                                                                                                                     <img src="{{url('/history')}}/wp-content/uploads/2020/01/services-icon1.png"
                                                                                                                                         title="services-icon1"
                                                                                                                                         alt="services-icon1"
                                                                                                                                         loading="lazy" />
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
                                                                                                                                     href="{{url('/history')}}personal-consultation/">
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
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         @else

                                         <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-71ffb9b"
                                             data-id="71ffb9b" data-element_type="column">
                                             <div class="elementor-column-wrap elementor-element-populated">
                                                 <div class="elementor-widget-wrap">
                                                     <div class="elementor-element elementor-element-df1e196 elementor-align-center elementor-widget elementor-widget-button"
                                                         data-id="df1e196" data-element_type="widget"
                                                         data-widget_type="button.default">
                                                         <div class="elementor-widget-container">
                                                             <div class="elementor-button-wrapper">
                                                                 <a class="elementor-button elementor-button-link elementor-size-sm"
                                                                     href="{{url('/signin')}}">
                                                                     <span class="elementor-button-content-wrapper">
                                                                         <span class="elementor-button-text"
                                                                             style="white-space: nowrap;padding: 10px 0px;">เข้าสู่ระบบ
                                                                             / สมัครสมาชิก</span>
                                                                     </span>
                                                                 </a>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         @endif
                                     </div>
                                 </div>
                             </section>
                             <section
                                 class="elementor-section elementor-top-section elementor-element elementor-element-c711845 header-menu-section elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                 data-id="c711845" data-element_type="section"
                                 data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;a590fcb&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                 <div class="elementor-container elementor-column-gap-default">
                                     <div class="elementor-row">
                                         <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fdd57b3"
                                             data-id="fdd57b3" data-element_type="column">
                                             <div class="elementor-column-wrap elementor-element-populated">
                                                 <div class="elementor-widget-wrap">
                                                     <div class="elementor-element elementor-element-9038a32 elementor-align-center elementor-widget elementor-widget-dt-header-menu"
                                                         data-id="9038a32" data-element_type="widget"
                                                         data-widget_type="dt-header-menu.default">
                                                         <div class="elementor-widget-container">
                                                             <div class="dt-header-menu" data-menu="16">
                                                                 <div class="menu-container">
                                                                     <ul id="menu-main-menu" class="dt-primary-nav"
                                                                         data-menu="16">
                                                                         <li class="close-nav"></li>
                                                                         <li id="menu-item-20400"
                                                                             class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-20398 <?php echo $h_active; ?> menu-item-20400 menu-item-depth-0">
                                                                             <a href="{{url('/')}}"
                                                                                 aria-current="page"><span>@lang('client.menu.home')</span></a>
                                                                         </li>
                                                                         <li id="menu-item-25184"
                                                                             class="<?php echo $b_active; ?>  menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-25184 menu-item-depth-0">
                                                                             <a
                                                                                 href="{{url('/blog')}}"><span>@lang('client.menu.blog')</span></a>
                                                                             <!-- <ul class="sub-menu is-hidden animate dt_fadeInLeft" data-animation="animate dt_fadeInLeft">
                                                                                    <li class="close-nav"></li>
                                                                                    <li class="go-back"><a href="javascript:void(0);"></a></li>
                                                                                    <li class="see-all"></li>
                                                                                    <li id="menu-item-25444" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25444 menu-item-depth-1"><a href="{{url('/history')}}"><span>Case Studies Listing</span></a></li>
                                                                                    <li id="menu-item-24713" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24713 menu-item-depth-1"><a href="{{url('/history')}}"><span>Case Single</span></a></li>
                                                                                </ul> -->
                                                                         </li>
                                                                         <li id="menu-item-20715"
                                                                             class="<?php echo $f_active; ?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-mega-menu menu-item-20715 menu-item-depth-0">
                                                                             <a href="{{url('/forecast')}}"><span>@lang('client.menu.mysalf')</span></a>

                                                                         </li>
                                                                         <li id="menu-item-24657"
                                                                             class="<?php echo $a_active; ?>  menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-24657 menu-item-depth-0">
                                                                             <a
                                                                                 href="#"><span>@lang('client.menu.activity')</span></a>
                                                                             <ul class="sub-menu is-hidden animate dt_fadeInLeft"
                                                                                 data-animation="animate dt_fadeInLeft">
                                                                                 <li class="close-nav"></li>
                                                                                 <li class="go-back"><a
                                                                                         href="javascript:void(0);"></a>
                                                                                 </li>
                                                                                 <li class="see-all"></li>
                                                                                 <li id="menu-item-25439"
                                                                                     class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25439 menu-item-depth-1">
                                                                                     <a
                                                                                         href="{{url('/activity/calendar')}}"><span>ปฏิททิน
                                                                                             กิจกรรม</span></a>
                                                                                 </li>
                                                                                 <li id="menu-item-25443"
                                                                                     class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25443 menu-item-depth-1">
                                                                                     <a
                                                                                         href="{{url('/activity/videos')}}"><span>วีดีโอ
                                                                                             กิจกรรม</span></a>
                                                                                 </li>
                                                                                 <li id="menu-item-25442"
                                                                                     class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25442 menu-item-depth-1">
                                                                                     <a
                                                                                         href="{{url('/activity/album')}}"><span>อัลบั้มภาพ
                                                                                             กิจกรรม</span></a>
                                                                                 </li>
                                                                             </ul>
                                                                         </li>
                                                                         <li id="menu-item-25196"
                                                                             class="<?php echo $p_active; ?>  menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-25196 menu-item-depth-0">
                                                                             <a href="{{url('/payment')}}"><span>@lang('client.menu.payment and service')</span></a>

                                                                         </li>
                                                                         <li id="menu-item-25187"
                                                                             class="<?php echo $ab_active; ?>  menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25187 menu-item-depth-0">
                                                                             <a href="{{url('/about')}}"><span>@lang('client.menu.about us')</span></a>

                                                                         </li>
                                                                         <li id="menu-item-20937"
                                                                             class="<?php echo $c_active; ?> menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-20937 menu-item-depth-0">
                                                                             <a href="{{url('/contacts')}}"><span>@lang('client.menu.contact us')</span></a>
                                                                             <ul class="sub-menu is-hidden animate dt_fadeInLeft"
                                                                                 data-animation="animate dt_fadeInLeft">
                                                                                 <li class="close-nav"></li>
                                                                                 <li class="go-back"><a
                                                                                         href="javascript:void(0);"></a>
                                                                                 </li>
                                                                                 <li class="see-all"></li>
                                                                                 <li id="menu-item-25467"
                                                                                     class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25467 menu-item-depth-1">
                                                                                     <a href="{{url('/contacts')}}"><span>@lang('client.menu.contact admin')</span></a>
                                                                                 </li>
                                                                                 <li id="menu-item-25414"
                                                                                     class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25414 menu-item-depth-1">
                                                                                     <a href="{{url('/history')}}"><span>@lang('client.menu.contact doc')</span></a>
                                                                                 </li>
                                                                             </ul>
                                                                         </li>
                                                                     </ul>
                                                                     <div class="sub-menu-overlay"></div>
                                                                 </div>
                                                                 <div class="mobile-nav-container mobile-nav-offcanvas-right"
                                                                     data-menu="16">
                                                                     <div class="menu-trigger menu-trigger-icon"
                                                                         data-menu="16"><i></i><span>Menu</span></div>
                                                                     <div class="mobile-menu" data-menu="16"></div>
                                                                     <div class="overlay"></div>
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
                                 class="elementor-section elementor-top-section elementor-element elementor-element-cb483d7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                 data-id="cb483d7" data-element_type="section"
                                 data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;1d1377f&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}]}">
                                 <div class="elementor-container elementor-column-gap-default">
                                     <div class="elementor-row">
                                         <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-723dc16"
                                             data-id="723dc16" data-element_type="column">
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
     </header><!-- **Header - End ** -->


     <!-- ** Breadcrumb ** -->
     <!-- ** Breadcrumb End ** -->
 </div><!-- ** Header Wrapper - End ** -->
