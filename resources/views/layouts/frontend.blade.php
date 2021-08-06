@php
    $carts = cartItems();
    $total = cartCount();
    $subtotal = cartTotal();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/k_favicon_32x.png') }}">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:300,300i,400,400i,500,500i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/font-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/defined.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home-electronic-vertical.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/shop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/drift-basic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home-default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/single-masonry-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/single-product.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/shopping-cart.css') }}">

    @yield('css')
</head>
<body class="lazy_icons btnt4_style_2 zoom_tp_2 css_scrollbar template-collection js_search_true cart_pos_side kalles_toolbar_true hover_img2 swatch_style_rounded swatch_list_size_small label_style_rounded wrapper_full_width header_sticky_true hide_scrolld_true des_header_8 top_bar_true prs_bordered_grid_1 search_pos_full lazyload js_search_type">
<div id="nt_wrapper">

    <!-- header -->
    <header id="ntheader" class="ntheader header_8 h_icon_la">
        <div class="ntheader_wrapper pr z_200">
            <div id="kalles-section-header_8" class="kalles-section sp_header_mid">
                <div class="header__mid">
                    <div class="container">
                        <div class="row al_center css_h_se">
                            <div class="col-md-4 col-3 dn_lg">
                                <a href="#" data-id="#nt_menu_canvas" class="push_side push-menu-btn lh__1 flex al_center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                        <rect width="30" height="1.5"></rect>
                                        <rect y="7" width="20" height="1.5"></rect>
                                        <rect y="14" width="30" height="1.5"></rect>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 tc tl_lg">
                                <div class="branding ts__05 lh__1">
                                    <a class="dib" href="{{ route('frontend.index') }}">
                                        <img class="w__95 logo_normal dn db_lg" src="{{ asset('assets/images/svg/kalles.svg') }}" alt="Kalles Template">
                                        <img class="w__100 logo_sticky dn" src="{{ asset('assets/images/svg/kalles.svg') }}" alt="Kalles Template">
                                        <img class="w__100 logo_mobile dn_lg" src="{{ asset('assets/images/svg/kalles.svg') }}" alt="Kalles Template">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 dn db_lg cl_h_search atc_opended_rs">
                                <form action="{{ route('frontend.search') }}" method="get" class="h_search_frm js_frm_search pr" role="search">
                                    <div class="row no-gutters al_center">
                                        <div class="frm_search_cat col-auto">
                                            <select name="product_type">
                                                <option value="*">All Categories</option>
                                                @foreach (categories() as $item)
                                                    <option value="{{ $item->cat_name_en }}">{{ ucfirst($item->cat_name_en) }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-auto h_space_search"></div>
                                        <div class="frm_search_input pr oh col">
                                            <input class="h_search_ip js_iput_search" autocomplete="off" type="text" name="q" placeholder="I’m shopping for...." />
                                        </div>
                                        <div class="frm_search_cat col-auto">
                                            <button class="h_search_btn js_btn_search" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                                {{-- <div class="pr">
                                    <div class="mini_cart_content fixcl-scroll widget">
                                        <div class="fixcl-scroll-content product_list_widget">
                                            <div class="ld_bar_search"></div>
                                            <div class="skeleton_wrap skeleton_js dn">
                                                <div class="row mb__10 pb__10">
                                                    <div class="col-auto widget_img_pr">
                                                        <div class="skeleton_img"></div>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <div class="skeleton_txt1"></div>
                                                        <div class="skeleton_txt2"></div>
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col-auto widget_img_pr">
                                                        <div class="skeleton_img"></div>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <div class="skeleton_txt1"></div>
                                                        <div class="skeleton_txt2"></div>
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col-auto widget_img_pr">
                                                        <div class="skeleton_img"></div>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <div class="skeleton_txt1"></div>
                                                        <div class="skeleton_txt2"></div>
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col-auto widget_img_pr">
                                                        <div class="skeleton_img"></div>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <div class="skeleton_txt1"></div>
                                                        <div class="skeleton_txt2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js_prs_search">
                                                <div class="row mb__10 pb__10">
                                                    <div class="col widget_img_pr">
                                                        <a class="db pr oh" href="product-detail-layout-01.html">
                                                            <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20640%20640%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/home-electronic-vertical/pr-01-80x.jpg" class="w__100 lazyload lz_op_ef" alt="Ysamsung Camera"/>
                                                        </a>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <a class="product-title db" href="product-detail-layout-01.html">Ysamsung Camera</a>
                                                        <del>$35.00</del>
                                                        <ins>$25.00</ins>
                                                        <span class="onsale nt_label">-29%</span>
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col widget_img_pr">
                                                        <a class="db pr oh" href="product-detail-layout-01.html">
                                                            <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20640%20640%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/home-electronic-vertical/pr-02-80x.jpg" class="w__100 lazyload lz_op_ef" alt="Beats Solo3 Wireless"/>
                                                        </a>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <a class="product-title db" href="product-detail-layout-01.html">Beats Solo3 Wireless</a>$35.00
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col widget_img_pr">
                                                        <a class="db pr oh" href="product-detail-layout-01.html">
                                                            <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20640%20640%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/home-electronic-vertical/pr-03-80x.jpg" class="w__100 lazyload lz_op_ef" alt="Lomo Sanremo Edition"/>
                                                        </a>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <a class="product-title db" href="product-detail-layout-01.html">Lomo Sanremo Edition</a>$65.00
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col widget_img_pr">
                                                        <a class="db pr oh" href="product-detail-layout-01.html">
                                                            <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201000%201000%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/home-electronic-vertical/pr-04-80x.jpg" class="w__100 lazyload lz_op_ef" alt="Ygoogle Speaker"/>
                                                        </a>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <a class="product-title db" href="product-detail-layout-01.html">Ygoogle Speaker</a>$65.00
                                                    </div>
                                                </div>
                                                <div class="row mb__10 pb__10">
                                                    <div class="col widget_img_pr">
                                                        <a class="db pr oh" href="product-detail-layout-01.html">
                                                            <img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201000%201000%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/home-electronic-vertical/pr-05-80x.jpg" class="w__100 lazyload lz_op_ef" alt="Ybeoplay H9i"/>
                                                        </a>
                                                    </div>
                                                    <div class="col widget_if_pr">
                                                        <a class="product-title db" href="product-detail-layout-01.html">Ybeoplay H9i</a>$55.00
                                                    </div>
                                                </div>
                                                <a href="#" class="btn fwsb detail_link">View All(107)
                                                    <i class="facl facl-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-lg-3 col-md-4 col-3 tr">
                                <div class="nt_action in_flex al_center cart_des_1">
                                    <a class="icon_search push_side cb chp" data-id="#nt_search_canvas" href="#"><i class="las la-search"></i></a>
                                    @guest
                                    <div class="my-account ts__05 pr dn db_md">
                                        <a class="cb chp db push_side" href="#" data-id="#nt_login_canvas"><i class="las la-user"></i></a>
                                    </div>
                                    @endguest
                                    @auth
                                    <div class="my-account ts__05 pr dn db_md">
                                       <a class="cb chp db push_side" href="{{ route('dashboard') }}"><i class="las la-user"></i></a> 
                                    </div>
                                    <div class="my-account ts__05 pr dn db_md">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <a class="cb chp db push_side" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"><i style="font-size:29px; margin-top:3px;" class="las la-user-times"></i></a> 
                                        </form>
                                    </div>
                                    @endauth
                                    <div class="icon_cart pr">
                                        <a class="push_side pr cb chp db" href="#" data-id="#nt_cart_canvas">
                                            <i class="las la-shopping-cart pr"><span id="cart-count" class="op__0 ts_op pa tcount bgb br__50 cw tc">{{ $total }}</span></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__bot border_false dn db_lg">
                    <div class="container">
                        <div class="row no-gutters al_center">
                            <div class="col-auto ha8_cat">
                                <h5 class="mg__0 fs__14 flex al_center">
                                    <i class="las la-bars mr__5 fs__18"></i><span class="dib truncate">SHOP BY CATEGORY</span>
                                </h5>
                                <div class="h_cat_nav pa op__0 mh_js_cat">
                                    <ul class="lazy_menu lazy_h_cat lazyload">
                                      @foreach (categories() as $key =>  $item)
                                      <li class="cat_menu-0">
                                        <a class="lh__1 flex al_center pr" href="{{ route('frontend.productbycategory', $item->id) }}"><i class="{{ $item->icon }}"></i>{{ $item->cat_name_en }}
                                            @if($key == 4)
                                            <span class="lbc_nav lb_menu_hot">Hot</span>
                                            @endif
                                        </a>
                                    </li>
                                      @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col ha8_nav">
                                <nav class="nt_navigation tl hover_side_up nav_arrow_false">
                                    <ul id="nt_menu_id" class="nt_menu in_flex wrap al_center">
                                      
                                        <li class="type_mega menu_wid_cus menu-item has-children menu_has_offsets menu_center pos_center">
                                            <a class="lh__1 flex al_center pr" href="{{ route('frontend.products') }}">Product</a>
                                        </li>
                                    
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-3 fs__12 ha8_txt tr">
                                <a href="mailto:kalles@domain.com" class="ttip_nt tooltip_top mr__10">
                                    <span class="tt_txt">kalles@domain.com</span>
                                    <i class="las la-envelope fs__14 mr__5"></i><span>contact</span>
                                </a>
                                <a class="ttip_nt tooltip_top mr__10">
                                    <span class="tt_txt">Time: 08:00 - 17:00</span>
                                    <i class="las la-clock fs__14 mr__5"></i><span>08:00 - 17:00</span>
                                </a>
                                <a href="tel:+01%2023456789" class="ttip_nt tooltip_top">
                                    <span class="tt_txt">Phone: +01 23456789</span>
                                    <i class="las la-phone fs__14 mr__5"></i><span>+01 23456789</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    @yield('content')

    <!-- footer -->
    <footer id="nt_footer" class="bgbl footer-1">
        <div id="kalles-section-footer_top" class="kalles-section footer__top type_instagram">
            <div class="footer__top_wrap footer_sticky_false footer_collapse_true nt_bg_overlay pr oh pb__30 pt__80">
                <div class="container pr z_100">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mb__50 order-lg-1 order-1">
                            <div class="widget widget_text widget_logo">
                                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30 dn_md">
                                    <span class="txt_title">Get in touch</span>
                                    <span class="nav_link_icon ml__5"></span>
                                </h3>
                                <div class="widget_footer">
                                    <div class="footer-contact">
                                        <p>
                                            <a class="d-block" href="index.html">
                                                <img class="w__100 mb__15 lazyload max-width__95px" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20220%2066%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" alt="Kalles Template" data-src="{{ asset('assets/images/svg/kalles.svg') }}">
                                            </a>
                                        </p>
                                        <p>
                                            <i class="pegk pe-7s-map-marker"> </i><span>184 Main Rd E, St Albans <br> <span class="pl__30">VIC 3021, Australia</span></span>
                                        </p>
                                        <p><i class="pegk pe-7s-mail"></i>
                                            <span><a href="mailto:contact@company.com">contact@company.com</a></span>
                                        </p>
                                        <p><i class="pegk pe-7s-call"></i> <span>+001 2233 456 </span></p>
                                        <div class="nt-social">
                                            <a href="https://www.facebook.com" class="facebook cb ttip_nt tooltip_top">
                                                <span class="tt_txt">Follow on Facebook</span>
                                                <i class="facl facl-facebook"></i>
                                            </a>
                                            <a href="https://twitter.com" class="twitter cb ttip_nt tooltip_top">
                                                <span class="tt_txt">Follow on Twitter</span>
                                                <i class="facl facl-twitter"></i>
                                            </a>
                                            <a href="https://www.instagram.com" class="instagram cb ttip_nt tooltip_top">
                                                <span class="tt_txt">Follow on Instagram</span>
                                                <i class="facl facl-instagram"></i>
                                            </a>
                                            <a href="https://www.linkedin.com" class="linkedin cb ttip_nt tooltip_top">
                                                <span class="tt_txt">Follow on Linkedin</span>
                                                <i class="facl facl-linkedin"></i>
                                            </a>
                                            <a href="https://www.pinterest.com" class="pinterest cb ttip_nt tooltip_top">
                                                <span class="tt_txt">Follow on Pinterest</span>
                                                <i class="facl facl-pinterest"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-12 mb__50 order-lg-2 order-1">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                                    <span class="txt_title">Categories</span>
                                    <span class="nav_link_icon ml__5"></span>
                                </h3>
                                <div class="menu_footer widget_footer">
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="shop-filter-options.html">Men</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-filter-options.html">Women</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-1600px-layout.html">Accessories</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-1600px-layout.html">Shoes</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-1600px-layout.html">Denim</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-1600px-layout.html">Dress</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-12 mb__50 order-lg-3 order-1">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                                    <span class="txt_title">Infomation</span>
                                    <span class="nav_link_icon ml__5"></span>
                                </h3>
                                <div class="menu_footer widget_footer">
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="contact-us.html">Contact Us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="terms-conditions.html">Terms &amp; Conditions</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="returns-exchanges.html">Returns &amp; Exchanges</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shipping-delivery.html">Shipping &amp; Delivery</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="privacy-policy.html">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-12 mb__50 order-lg-4 order-1">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                                    <span class="txt_title">Useful links</span>
                                    <span class="nav_link_icon ml__5"></span>
                                </h3>
                                <div class="menu_footer widget_footer">
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="store-location.html">Store Location</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-grid.html">Latest News</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="my-account.html">My Account</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="size-guide.html">Size Guide</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="faqs-2.html">FAQs 2</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="faqs.html">FAQs</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mb__50 order-lg-5 order-1">
                            <div class="widget widget_text">
                                <h3 class="widget-title fwsb flex al_center fl_between fs__16 mg__0 mb__30">
                                    <span class="txt_title">Download our app</span><span class="nav_link_icon ml__5"></span>
                                </h3>
                                <div class="widget_footer newl_des_1">
                                   <img style="margin-bottom: 20px;" src="https://i.postimg.cc/VkPXWgmQ/image.png" alt="">
                                   <img src="https://i.postimg.cc/nhKBRmhs/image.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="kalles-section-footer_bot" class="kalles-section footer__bot">
            <div class="footer__bot_wrap pt__20 pb__20">
                <div class="container pr tc">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12 col_1">Copyright © 2021
                            <span class="cp">Kalles</span> all rights reserved. Powered by<a href="#"> The4</a></div>
                        <div class="col-lg-6 col-md-12 col-12 col_2">
                            <ul id="footer-menu" class="clearfix">
                                <li class="menu-item"><a href="#">Shop</a></li>
                                <li class="menu-item"><a href="#">About Us</a></li>
                                <li class="menu-item"><a href="#">Contact</a></li>
                                <li class="menu-item"><a href="blog-grid.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</div>

<!--mask overlay-->
<div class="mask-overlay ntpf t__0 r__0 l__0 b__0 op__0 pe_none"></div>
<!--end mask overlay-->

<!--quick view-->
 <div id="quick-view-tpl" class="dn">
    <div class="product-quickview single-product-content img_action_zoom kalles-quick-view-tpl">
        <div class="row product-image-summary">
            <div class="col-lg-7 col-md-6 col-12 product-images pr oh">
                <span class="tc nt_labels pa pe_none cw"><span class="onsale nt_label"><span>-34%</span></span></span>
                <div class="images">
                    <div class="product-images-slider tc equal_nt nt_slider nt_carousel_qv p-thumb_qv nt_contain ratio_imgtrue position_8" data-flickity='{ "fade":true,"cellSelector": ".q-item:not(.is_varhide)","cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": false, "lazyLoad": 0,"dragThreshold" : 0,"pageDots": true,"rightToLeft": false }'>
                        <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
                            <span class="nt_bg_lz lazyload" data-bgset="assets/images/quick_view/pr-01.jpg"></span>
                        </div>
                        <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
                            <span class="nt_bg_lz lazyload" data-bgset="assets/images/quick_view/pr-02.jpg"></span>
                        </div>
                        <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
                            <span class="nt_bg_lz lazyload" data-bgset="assets/images/quick_view/pr-03.jpg"></span>
                        </div>
                        <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
                            <span class="nt_bg_lz lazyload" data-bgset="assets/images/quick_view/pr-04.jpg"></span>
                        </div>
                        <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
                            <span class="nt_bg_lz lazyload" data-bgset="assets/images/quick_view/pr-05.jpg"></span>
                        </div>
                        <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
                            <span class="nt_bg_lz lazyload" data-bgset="assets/images/quick_view/pr-06.jpg"></span>
                        </div>
                        <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
                            <span class="nt_bg_lz lazyload" data-bgset="assets/images/quick_view/pr-07.jpg"></span>
                        </div>
                        <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
                            <span class="nt_bg_lz lazyload" data-bgset="assets/images/quick_view/pr-08.jpg"></span>
                        </div>
                        <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
                            <span class="nt_bg_lz lazyload" data-bgset="assets/images/quick_view/pr-09.jpg"></span>
                        </div>
                        <div data-grname="not4" data-grpvl="ntt4" class="js-sl-item q-item sp-pr-gallery__img w__100" data-mdtype="image">
                            <span class="nt_bg_lz lazyload" data-bgset="assets/images/quick_view/pr-10.jpg"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12 summary entry-summary pr">
                <div class="summary-inner gecko-scroll-quick">
                    <div class="gecko-scroll-content-quick">
                        <div class="kalles-section-pr_summary kalles-section summary entry-summary mt__30">
                            <h1 class="product_title entry-title fs__16"><a href="product-detail-layout-01.html">La Bohème Rose Gold</a></h1>
                            <div class="flex wrap fl_between al_center price-review">
                                <p class="price_range" id="price_qv">
                                    <del>$60.00</del>
                                    <ins>$40.00</ins>
                                </p>
                                <a href="product-detail-layout-01.html" class="rating_sp_kl dib">
                                    <div class="kalles-rating-result">
                                    <span class="kalles-rating-result__pipe">
                                        <span class="kalles-rating-result__start"></span>
                                        <span class="kalles-rating-result__start"></span>
                                        <span class="kalles-rating-result__start"></span>
                                        <span class="kalles-rating-result__start active"></span>
                                        <span class="kalles-rating-result__start"></span>
                                    </span>
                                        <span class="kalles-rating-result__number">(12 reviews)</span>
                                    </div>
                                </a>
                            </div>
                            <div class="pr_short_des">
                                <p class="mg__0">Go kalles this summer with this vintage navy and white striped v-neck t-shirt from the Nike. Perfect for pairing with denim and white kicks for a stylish kalles vibe.</p>
                            </div>
                            <div class="btn-atc atc-slide btn_des_1 btn_txt_3">
                                <div id="callBackVariant_qv" class="nt_pink nt1_ nt2_">
                                    <div id="cart-form_qv" class="nt_cart_form variations_form variations_form_qv">
                                        <div class="variations mb__40 style__circle size_medium style_color des_color_1">
                                            <div class="swatch is-color kalles_swatch_js">
                                                <h4 class="swatch__title">Color:
                                                    <span class="nt_name_current user_choose_js">Pink</span>
                                                </h4>
                                                <ul class="swatches-select swatch__list_pr">
                                                    <li class="ttip_nt tooltip_top_right nt-swatch swatch_pr_item is-selected" data-escape="Pink">
                                                        <span class="tt_txt">Pink</span><span class="swatch__value_pr pr bg_color_pink"></span>
                                                    </li>
                                                    <li class="ttip_nt tooltip_top nt-swatch swatch_pr_item" data-escape="Black">
                                                        <span class="tt_txt">Black</span><span class="swatch__value_pr pr bg_color_black"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="swatch is-label kalles_swatch_js">
                                                <h4 class="swatch__title">Size:
                                                    <span class="nt_name_current user_choose_js">M</span>
                                                </h4>
                                                <ul class="swatches-select swatch__list_pr">
                                                    <li class="nt-swatch swatch_pr_item pr" data-escape="XS">
                                                        <span class="swatch__value_pr">XS</span>
                                                    </li>
                                                    <li class="nt-swatch swatch_pr_item pr" data-escape="S">
                                                        <span class="swatch__value_pr">S</span>
                                                    </li>
                                                    <li class="nt-swatch swatch_pr_item pr is-selected" data-escape="M">
                                                        <span class="swatch__value_pr">M</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="variations_button in_flex column w__100 buy_qv_false">
                                            <div class="flex wrap">
                                                <div class="quantity pr mr__10 order-1 qty__true" id="sp_qty_qv">
                                                    <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" value="1" name="quantity" inputmode="numeric">
                                                    <div class="qty tc fs__14">
                                                        <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                                            <i class="facl facl-plus"></i>
                                                        </button>
                                                        <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">
                                                            <i class="facl facl-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="nt_add_w ts__03 pa order-3">
                                                    <a href="#" class="wishlistadd cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a>
                                                </div>
                                                <button type="submit" data-time='6000' data-ani='shake' class="single_add_to_cart_button button truncate js_frm_cart w__100 mt__20 order-4">
                                                    <span class="txt_add ">Add to cart</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="trust_seal_qv" class="pr_trust_seal tl">
                                <p class="mess_cd cb mb__10 fwm tu fs_16"></p>
                                <img class="lazyload img_tr_s1 w__100" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%202244%20285%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/images/trust_img2.png" alt="">
                            </div>
                            <div class="product_meta">
                                <span class="sku_wrapper"><span class="cb">SKU:</span> <span class="sku value cg">4540967714955-1</span></span>
                                <span class="posted_in"><span class="cb">Categories:</span> <a href="shop-filter-options.html" class="cg" title="Accessories">Accessories</a>, <a href="shop-filter-options.html" class="cg" title="All">All</a>, <a href="shop-filter-options.html" class="cg" title="Best seller">Best seller</a>, <a href="shop-filter-options.html" class="cg" title="New Arrival">New Arrival</a>, <a href="shop-filter-options.html" class="cg" title="Sale">Sale</a>, <a href="shop-filter-options.html" class="cg" title="Watches">Watches</a>, <a href="shop-filter-options.html" class="cg" title="Women">Women</a></span>
                                <span class="tagged_as"><span class="cb">Tags:</span> <a href="shop-filter-options.html" class="cg" title="Color Black">Color Black</a>, <a href="shop-filter-options.html" class="cg" title="Color Pink">Color Pink</a>, <a href="shop-filter-options.html" class="cg" title="Price $7-$50">Price $7-$50</a>, <a href="shop-filter-options.html" class="cg" title="Vendor Kalles">Vendor Kalles</a>, <a href="shop-filter-options.html" class="cg" title="Watch">Watch</a>, <a href="shop-filter-options.html" class="cg" title="women">women</a></span>
                            </div>
                            <div class="social-share tc">
                                <div class="at-share-btn-elements kalles-social-media d-block text-left fs__0 lh__1">
                                    <a href="https://www.facebook.com/" class="at-icon-wrapper at-share-btn at-svc-facebook bg-white kalles-social-media__btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-facebook">
                                            <g>
                                                <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="https://twitter.com/" class="at-icon-wrapper at-share-btn at-svc-twitter bg-white kalles-social-media__btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-twitter">
                                            <g>
                                                <path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="https://www.google.com/gmail/about" class="at-icon-wrapper at-share-btn at-svc-email bg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-email kalles-social-media__btn">
                                            <g>
                                                <g fill-rule="evenodd"></g>
                                                <path d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z"></path>
                                                <path d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z"></path>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="https://www.pinterest.com/" class="at-icon-wrapper at-share-btn at-svc-pinterest_share bg-white kalles-social-media__btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-pinterest_share">
                                            <g>
                                                <path d="M7 13.252c0 1.81.772 4.45 2.895 5.045.074.014.178.04.252.04.49 0 .772-1.27.772-1.63 0-.428-1.174-1.34-1.174-3.123 0-3.705 3.028-6.33 6.947-6.33 3.37 0 5.863 1.782 5.863 5.058 0 2.446-1.054 7.035-4.468 7.035-1.232 0-2.286-.83-2.286-2.018 0-1.742 1.307-3.43 1.307-5.225 0-1.092-.67-1.977-1.916-1.977-1.692 0-2.732 1.77-2.732 3.165 0 .774.104 1.63.476 2.336-.683 2.736-2.08 6.814-2.08 9.633 0 .87.135 1.728.224 2.6l.134.137.207-.07c2.494-3.178 2.405-3.8 3.533-7.96.61 1.077 2.182 1.658 3.43 1.658 5.254 0 7.614-4.77 7.614-9.067C26 7.987 21.755 5 17.094 5 12.017 5 7 8.15 7 13.252z" fill-rule="evenodd"></path>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="https://www.messenger.com" class="at-icon-wrapper at-share-btn at-svc-messenger bg-white kalles-social-media__btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-messenger">
                                            <g>
                                                <path d="M16 6C9.925 6 5 10.56 5 16.185c0 3.205 1.6 6.065 4.1 7.932V28l3.745-2.056c1 .277 2.058.426 3.155.426 6.075 0 11-4.56 11-10.185C27 10.56 22.075 6 16 6zm1.093 13.716l-2.8-2.988-5.467 2.988 6.013-6.383 2.868 2.988 5.398-2.987-6.013 6.383z" fill-rule="evenodd"></path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <a href="product-detail-layout-01.html" class="btn fwsb detail_link p-0 fs__14">View full details<i class="facl facl-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!--end quick view-->

<!--quick shop-->
<div id="quick-shop-tpl" class="dn">
    <div class="wrap_qs_pr buy_qs_false kalles-quick-shop">
        <div class="qs_imgs_i row al_center mb__30">
            <div class="col-auto cl_pr_img">
                <div class="pr oh qs_imgs_wrap">
                    <div class="row equal_nt qs_imgs nt_slider nt_carousel_qs p-thumb_qs" data-flickity='{"fade":false,"cellSelector":".qs_img_i","cellAlign":"center","wrapAround":true,"autoPlay":false,"prevNextButtons":false,"adaptiveHeight":true,"imagesLoaded":false,"lazyload":0,"dragThreshold":0,"pageDots":false,"rightToLeft":false}'>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz" data-bgset="assets/images/quick_shop/p_qs_01.jpg"></div>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz" data-bgset="assets/images/quick_shop/p_qs_02.jpg"></div>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz" data-bgset="assets/images/quick_shop/p_qs_03.jpg"></div>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz" data-bgset="assets/images/quick_shop/p_qs_04.jpg"></div>
                        <div class="col-12 js-sl-item qs_img_i nt_img_ratio lazyload nt_bg_lz" data-bgset="assets/images/quick_shop/p_qs_05.jpg"></div>
                    </div>
                </div>
            </div>
            <div class="col cl_pr_title tc">
                <h3 class="product-title pr fs__16 mg__0 fwm">
                    <a class="cd chp" href="product-detail-layout-01.html">Cluse La Boheme Rose Gold</a>
                </h3>
                <div id="price_qs"><span class="price "><del>$60.00</del> <ins>$45.00</ins></span><span class="qs_label onsale cw"><span>-25%</span></span>
                </div>
            </div>
        </div>
        <div class="qs_info_i tc">
            <div class="qs_swatch">
                <div id="callBackVariant_qs" class="nt_green nt1_xs nt2_">
                    <div id="cart-form_qs" class="nt_cart_form variations_form variations_form_qs">
                        <div class="variations mb__40 style__circle size_medium style_color des_color_1">
                            <div class="nt_select_qs0 swatch is-color kalles_swatch_js">
                                <h4 class="swatch__title">Color: <span class="nt_name_current">Green</span></h4>
                                <ul class="swatches-select swatch__list_pr">
                                    <li class="ttip_nt tooltip_top_right nt-swatch swatch_pr_item bg_css_green is-selected" data-escape="Green">
                                        <span class="tt_txt">Green</span><span class="swatch__value_pr pr bg_color_green"></span>
                                    </li>
                                    <li class="ttip_nt tooltip_top nt-swatch swatch_pr_item " data-escape="Grey">
                                        <span class="tt_txt">Grey</span><span class="swatch__value_pr pr bg_color_grey"></span>
                                    </li>
                                    <li class="ttip_nt tooltip_top nt-swatch swatch_pr_item bg_css_blue " data-escape="Blue">
                                        <span class="tt_txt">Blue</span><span class="swatch__value_pr pr bg_color_blue"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="nt_select_qs1 swatch is-label kalles_swatch_js">
                                <h4 class="swatch__title">Size: <span class="nt_name_current">XS</span></h4>
                                <ul class="swatches-select swatch__list_pr">
                                    <li class="nt-swatch swatch_pr_item pr bg_css_xs is-selected" data-escape="XS">
                                        <span class="swatch__value_pr">XS</span>
                                    </li>
                                    <li class="nt-swatch swatch_pr_item pr " data-escape="S">
                                        <span class="swatch__value_pr">S</span>
                                    </li>
                                    <li class="nt-swatch swatch_pr_item pr " data-escape="M">
                                        <span class="swatch__value_pr">M</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="variations_button in_flex column w__100">
                            <div class="flex al_center column">
                                <div class="quantity pr mb__15 order-1 qty__" id="sp_qty_qs">
                                    <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" step="1" min="1" max="9999" name="quantity" value="1" inputmode="numeric">
                                    <div class="qty tc fs__14">
                                        <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                            <i class="facl facl-plus"></i></button>
                                        <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">
                                            <i class="facl facl-minus"></i></button>
                                    </div>
                                </div>

                                <button type="submit" class="single_add_to_cart_button button truncate js_frm_cart w__100 order-4">
                                    <span class="txt_add ">Add to cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="product-detail-layout-01.html" class="btn fwsb detail_link dib mt__15">View full details<i class="facl facl-right"></i></a>
        </div>
    </div>
</div>
<!--end quick shop-->

<!-- mini cart box -->
<div id="nt_cart_canvas" class="nt_fk_canvas dn @if(session('cartopen')) act_opened @endif ">
    <div class="nt_mini_cart nt_js_cart flex column h__100 btns_cart_1">
        <div class="mini_cart_header flex fl_between al_center">
            <div class="h3 fwm tu fs__16 mg__0">Shopping cart</div>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
        </div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content">
                    

                    <div class="mini_cart_items js_cat_items lazyload" id="cart-push">
                        @include('includes.cartloop');
                      {{-- @forelse(cartItems() as $item)
                        <div class="mini_cart_item js_cart_item flex al_center pr oh">
                            <div class="ld_cart_bar"></div>
                            <a href="{{ route('frontend.productDetails', $item->get_product->id ?? '') }}" class="mini_cart_img">
                                <img class="w__100 lazyload" data-src="{{ asset('web_images/products/thumb') }}/{{ $item->get_product->id }}.jpg" width="120" height="153" alt="" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAiIGhlaWdodD0iMTUzIiB2aWV3Qm94PSIwIDAgMTIwIDE1MyI+PC9zdmc+">
                            </a>
                            <div class="mini_cart_info">
                                <a href="{{ route('frontend.productDetails', $item->get_product->id ?? '') }}" class="mini_cart_title truncate">{{ $item->get_product->prod_title_en }}</a>
                                <div class="mini_cart_meta">
                                    <p class="cart_selling_plan"></p>
                                    <div class="cart_meta_price price">
                                        <div class="cart_price">
                                            <del>$60.00</del>
                                            <ins>QAR {{ $item->get_product->price }}</ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="mini_cart_actions">
                                    <div class="quantity pr mr__10 qty__true">
                                        <input type="number" class="input-text qty text tc qty_cart_js" step="1" min="0" max="9999" value="{{ $item->cart_amount }}">
                                        <div class="qty tc fs__14">
                                            <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                                <i class="facl facl-plus"></i>
                                            </button>
                                            <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0 qty_1">
                                                <i class="facl facl-minus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <a href="{{ route('cart.delete', $item->id) }}"><span class="tt_txt">Remove this item</span>
                                        Remove
                                    </a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="empty tc mt__40"><i class="las la-shopping-bag pr mb__10"></i>
                        <p>Your cart is empty.</p>
                        <p class="return-to-shop mb__15">
                            <a class="button button_primary tu js_add_ld" href="{{ url('/products') }}">Return To Shop</a>
                        </p>
                    </div>
                    @endforelse --}}
                    </div>
                </div>
            </div>
            <div class="mini_cart_footer js_cart_footer">
                <div class="js_cat_dics"></div>
                <div class="total row fl_between al_center">
                    <div class="col-auto"><strong>Subtotal:</strong></div>
                    <div class="col-auto tr js_cat_ttprice">
                        <div id="cart-total" class="cart_tot_price">QAR {{ $subtotal }}</div>
                    </div>
                </div>
                <p class="txt_tax_ship mb__5 fs__12">Taxes, shipping and discounts codes calculated at checkout</p>
                <p class="pr db mb__5 fs__12">
                    <input type="checkbox" id="cart_agree" class="js_agree_ck mr__5" name="ck_lumise"><label for="cart_agree">I agree with the terms and conditions.</label>
                    <svg class="dn scl_selected" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path>
                    </svg>
                </p>
                <a href="{{ route('cart.index') }}" class="button btn-cart mt__10 mb__10 js_add_ld d-inline-flex justify-content-center align-items-center cd-imp">View cart</a>

               <a href="{{ route('checkout.index') }}" class="button btn-checkout mt__10 mb__10 js_add_ld d-inline-flex justify-content-center align-items-center text-white">Check Out</a>

                <div class="cat_img_trust mt__10 lazyload">
                    <img class="w__100" src="{{ asset('assets/images/trust_img2.png') }}" width="360" height="46" alt="">
                </div>
            </div>
        </div>

        <!--mini cart tool cart node-->
        {{-- <div class="mini_cart_note pe_none">
            <label for="CartSpecialInstructions" class="mb__5 dib"><span class="txt_add_note ">Add Order Note</span><span class="txt_edit_note dn">Edit Order Note</span></label>
            <textarea name="note" id="CartSpecialInstructions" placeholder="How can we help you?"></textarea>
            <input type="button" class="button btn_back js_cart_tls_back mt__15 mb__10" value="Save">
            <input type="button" class="button btn_back btn_back2 js_cart_tls_back" value="Cancel">
        </div> --}}

        <!--mini cart tool cart gift-->
        {{-- <div class="mini_cart_gift pe_none">
            <div class="shipping_calculator tc">
                <p class="field">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="cd dib pr">
                        <polyline points="20 12 20 22 4 22 4 12"></polyline>
                        <rect x="2" y="7" width="20" height="5"></rect>
                        <line x1="12" y1="22" x2="12" y2="7"></line>
                        <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                        <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                    </svg>
                    <span class="gift_wrap_text mt__10 db"><span class="cd">Do you want a gift wrap?</span> Only $5.00</span>
                </p>
                <p class="field">
                    <a href="shop-filter-sidebar.html" class="w__100 tu tc button button_primary truncate js_addtc">Add A Gift Wrap</a>
                </p>
                <p class="field">
                    <input type="button" class="button btn_back js_cart_tls_back" value="Cancel">
                </p>
            </div>
        </div> --}}

        <!--mini cart tool shipping-->
        {{-- <div class="mini_cart_ship pe_none">
            <div class="shipping_calculator">
                <h3>Estimate Shipping</h3>
                <p class="field">
                    <label for="address_country_ship">Country</label>
                    <select id="address_country_ship" class="lazyload">
                        <option value="" selected>---</option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Italy">Italy</option>
                        <option value="Germany">Germany</option>
                        <option value="France">France</option>
                        <option value="Spain">Spain</option>
                        <option value="Australia">Australia</option>
                        <option value="Finland">Finland</option>
                        <option value="Austria">Austria</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Canada">Canada</option>
                        <option value="Chile">Chile</option>
                        <option value="Cuba">Cuba</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Japan">Japan</option>
                    </select>
                </p>
                <p class="field">
                    <label for="address_zip_ship">Postal/Zip Code</label>
                    <input type="text" id="address_zip_ship">
                </p>
                <p class="field">
                    <input type="button" class="get_rates button" value="Calculate Shipping">
                </p>
                <p class="field">
                    <input type="button" class="button btn_back js_cart_tls_back" value="Cancel">
                </p>
                <div id="response_calcship"></div>
            </div>
        </div> --}}

        <!--mini cart tool coupon-->
        {{-- <div class="mini_cart_dis pe_none">
            <div class="shipping_calculator">
                <h3>Add A Coupon</h3>
                <p>Coupon code will work on checkout page</p>
                <p class="field">
                    <input type="text" name="discount" value="" placeholder="Coupon code">
                </p>
                <p class="field">
                    <input type="button" class="button btn_back js_cart_tls_back" value="Save">
                </p>
                <input type="button" class="button btn_back btn_back2 js_cart_tls_back" value="Cancel">
            </div>
        </div> --}}

    </div>
</div>
<!-- end mini cart box-->

<!-- search box -->
<div id="nt_search_canvas" class="nt_fk_full dn tl tc_lg">
    <div class="nt_mini_cart flex column h__100">
        <div class="mini_cart_wrap">
            <form method="get" class="search_header mini_search_frm js_frm_search pr" role="search">
                <div class="row">
                    <div class="frm_search_cat col-auto">
                        <select name="product_type">
                            <option value="*">All Categories</option>
                            <option value="Accessories">Accessories</option>
                            <option value="Bag">Bag</option>
                            <option value="Camera">Camera</option>
                            <option value="Decor">Decor</option>
                            <option value="Earphones">Earphones</option>
                            <option value="Electric">Electric</option>
                            <option value="Furniture">Furniture</option>
                            <option value="Headphone">Headphone</option>
                            <option value="Men">Men</option>
                            <option value="Shoes">Shoes</option>
                            <option value="Speaker">Speaker</option>
                            <option value="Watch">Watch</option>
                            <option value="Women">Women</option>
                        </select>
                    </div>
                    <div class="frm_search_input pr oh col">
                        <input class="search_header__input js_iput_search" autocomplete="off" type="text" name="q" placeholder="Search for products">
                        <button class="search_header__submit js_btn_search use_jsfull hide_  pe_none" type="submit">
                            <i class="iccl iccl-search"></i></button>
                    </div>
                </div>
                <i class="close_pp pegk pe-7s-close ts__03 cd pa r__0"></i>
                <div class="ld_bar_search"></div>
            </form>
            <div class="search_header__prs fwsb cd tc">
                <span class="h_suggest">Need some inspiration?</span><span class="h_result dn">Search Result:</span><span class="h_results dn">Search Results:</span>
            </div>
            <div class="search_header__content mini_cart_content fixcl-scroll widget">
                <div class="fixcl-scroll-content product_list_widget">
                    <div class="skeleton_wrap skeleton_js row fl_center dn">
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="skeleton_img"></div>
                                </div>
                                <div class="col-12 mt__10">
                                    <div class="skeleton_txt1"></div>
                                    <div class="skeleton_txt2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="skeleton_img"></div>
                                </div>
                                <div class="col-12 mt__10">
                                    <div class="skeleton_txt1"></div>
                                    <div class="skeleton_txt2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="skeleton_img"></div>
                                </div>
                                <div class="col-12 mt__10">
                                    <div class="skeleton_txt1"></div>
                                    <div class="skeleton_txt2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="skeleton_img"></div>
                                </div>
                                <div class="col-12 mt__10">
                                    <div class="skeleton_txt1"></div>
                                    <div class="skeleton_txt2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js_prs_search row fl_center">
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="Analogue Resin Strap" data-bgset="assets/images/home-fashion-9/pr-s-01.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="">Analogue Resin Strap</a>$30.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-02.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Ridley High Waist</a>$36.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-03.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Blush Beanie</a>$15.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-04.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Cluse La Boheme Rose Gold</a>
                                    <del>$60.00</del>
                                    <ins>$45.00</ins>
                                    <span class="onsale nt_label">-25%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-05.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Mercury Tee</a>$68.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-06.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">La Bohème Rose Gold</a>
                                    <del>$60.00</del>
                                    <ins>$40.00</ins>
                                    <span class="onsale nt_label">-34%</span></div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-07.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Cream women pants</a>$35.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-08.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Black mountain hat</a>$50.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-09.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Short Sleeved Hoodie</a>
                                    <del>$45.00</del>
                                    <ins>$30.00</ins>
                                    <span class="onsale nt_label">-34%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-10.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Sport Sneaker</a>$35.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-11.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Men pants</a>$49.00–$56.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-12.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Skin Sweatpans</a>
                                    <del>$75.00</del>
                                    <ins>$45.00</ins>
                                    <span class="onsale nt_label">-40%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-13.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Simple Skin T-shirt</a>$56.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-14.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Sunny Life</a>$68.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-15.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Leather White Trainers</a>$20.00
                                </div>
                            </div>
                        </div>
                        <div class="col-auto tc">
                            <div class="row mb__10 pb__10">
                                <div class="col-12">
                                    <div class="img_fix_search">
                                        <a class="db pr oh" href="product-detail-layout-01.html"><img src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201128%201439%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" class="w__100 lazyload" alt="" data-bgset="assets/images/home-fashion-9/pr-s-16.jpg"></a>
                                    </div>
                                </div>
                                <div class="col-12 mt__10">
                                    <a class="product-title db" href="product-detail-layout-01.html">Stripe Long Sleeve Top</a>$15.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search box -->

<!-- login box -->
@guest
<div id="nt_login_canvas" class="nt_fk_canvas dn lazyload">
    <form id="customer_login" class="nt_mini_cart flex column h__100 is_selected">
        @csrf
        <div class="mini_cart_header flex fl_between al_center">
            <div class="h3 widget-title tu fs__16 mg__0">Login</div>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i></div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content"><p class="form-row">
                    <label for="CustomerEmail">Email <span class="required">*</span></label>
                    <input type="email" name="email" id="CustomerEmail" autocomplete="email" autocapitalize="off">
                </p>
                    <p class="form-row">
                        <label for="CustomerPassword">Password <span class="required">*</span></label>
                        <input type="password" name="password" autocomplete="current-password" id="CustomerPassword">
                        <small id="loginError" class="text-danger"></small>
                    </p>
                    <input id="login" type="submit" onclick="event.preventDefault()" class="button button_primary w__100 tu " value="Sign In">
                    <div id="loader" class="text-center d-none">
                        <img width="50" src="{{ asset('spinner.gif') }}" alt="">
                    </div>
                    <p class="text-success" id="success"></p>
                    <br>
                    <p class="mb__10 mt__20">New customer?
                        <a href="#" data-id="#RegisterForm" class="link_acc">Create your account</a>
                    </p>
                    <p>Lost password?
                        <a href="#" data-id="#RecoverForm" class="link_acc">Recover password</a>
                    </p>
                </div>
            </div>
        </div>
    </form>

    <form id="RecoverForm" class="nt_mini_cart flex column h__100">
        <div class="mini_cart_header flex fl_between al_center">
            <div class="h3 widget-title tu fs__16 mg__0">Recover password</div>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i></div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content">
                    <p class="form-row">
                        {{-- <label for="RecoverEmail">Email address</label>
                        <input type="email" value="" name="email" id="RecoverEmail" class="input-full" autocomplete="email" autocapitalize="off"> --}}
                        Please contact customer service to reset your passowrd on <strong>33306077</strong>
                    </p>
                    {{-- <input type="button" class="button button_primary w__100 tu js_add_ld" value="Reset Password"> --}}
                    <br>
                    <p class="mb__10 mt__20">Remembered your password?
                        <a href="#" data-id="#customer_login" class="link_acc">Back to login</a>
                    </p>
                </div>
            </div>
        </div>
    </form>

    <form id="RegisterForm" class="nt_mini_cart flex column h__100">
        <div class="mini_cart_header flex fl_between al_center">
            <div class="h3 widget-title tu fs__16 mg__0">Register</div>
            <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
        </div>
        <div class="mini_cart_wrap">
            <div class="mini_cart_content fixcl-scroll">
                <div class="fixcl-scroll-content">
                    <p class="form-row">
                        <label for="firstname_en">First Name</label>
                        <input type="text" id="firstname_en" name="firstname_en" id="firstname_en" autocomplete="given-name">
                    </p>
                    <small class="text-danger" id="firstname_error"></small>
                    <p class="form-row">
                        <label for="lastname_en">Last Name</label>
                        <input type="text" name="lastname_en" id="lastname_en" autocomplete="family-name">
                        <small class="text-danger" id="lastname_error"></small>
                    </p>
                    <p class="form-row">
                        <label for="regEmail">Email <span class="required">*</span></label>
                        <input type="email" name="email" id="regEmail" class="" autocapitalize="off" autocomplete="email" aria-required="true">
                        <small class="text-danger" id="regEmail_error"></small>
                    </p>
                    <p class="form-row">
                        <label for="regPassword">Password <span class="required">*</span></label>
                        <input type="password" name="password" id="regPassword" class="" autocomplete="current-password" aria-required="true">
                        <small class="text-danger" id="regPassword_error"></small>
                    </p>
                    <input id="register" type="submit" onclick="event.preventDefault();" value="Register" class="button button_primary w__100 tu js_add_ld">
                    <div id="reg_loader" class="text-center d-none">
                        <img width="50" src="{{ asset('spinner.gif') }}" alt="">
                    </div>
                    <br>
                    <p class="mb__10 mt__20">Already have an account?
                        <a href="#" data-id="#customer_login" class="link_acc">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </form>
</div>
@endguest
<!-- end login box -->

<!-- mobile toolbar -->
<div id="kalles-section-toolbar_mobile" class="kalles-section">
    <div class="kalles_toolbar kalles_toolbar_label_true ntpf r__0 l__0 b__0 flex fl_between al_center">
        <div class="type_toolbar_shop kalles_toolbar_item">
            <a href="shop-filter-options.html">
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">Shop</span>
            </a>
        </div>
        {{-- <div class="type_toolbar_filter kalles_toolbar_item dn">
            <a class="dt_trigger_cl" href="#" data-trigger=".btn_filter">
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">Filter</span>
            </a>
        </div> --}}

        <div class="type_toolbar_cart kalles_toolbar_item">
            <a href="#" class="push_side" data-id="#nt_cart_canvas">
				<span class="toolbar_icon">
					<span class="jsccount toolbar_count">{{ $total }}</span>
				</span>
                <span class="kalles_toolbar_label">Cart</span>
            </a>
        </div>
        <div class="type_toolbar_account kalles_toolbar_item">
           @guest
            <a href="#" class="push_side" data-id="#nt_login_canvas">
            <span class="toolbar_icon"></span>
            <span class="kalles_toolbar_label">Account</span>
             </a>
           @endguest
           @auth
           <a href="{{ route('dashboard') }}" class="push_side">
            <span class="toolbar_icon"></span>
            <span class="kalles_toolbar_label">Account</span>
             </a>
           @endauth
        </div>
        <div class="type_toolbar_search kalles_toolbar_item">
            <a href="#" class="push_side" data-id="#nt_search_canvas">
                <span class="toolbar_icon"></span>
                <span class="kalles_toolbar_label">Search</span>
            </a>
        </div>
    </div>
</div>
<!-- end mobile toolbar -->

<!-- mobile menu -->
<div id="nt_menu_canvas" class="nt_fk_canvas nt_sleft dn lazyload">
    <i class="close_pp pegk pe-7s-close ts__03 cd"></i>
    <div class="mb_nav_tabs flex al_center mb_cat_true">
        <div class="mb_nav_title pr mb_nav_ul flex al_center fl_center active" data-id="#kalles-section-mb_nav_js">
            <span class="db truncate">Menu</span>
        </div>
        <div class="mb_nav_title pr flex al_center fl_center" data-id="#kalles-section-mb_cat_js">
            <span class="db truncate">Categories</span>
        </div>
    </div>
    <div id="kalles-section-mb_nav_js" class="mb_nav_tab active">
        <div id="kalles-section-mb_nav" class="kalles-section">
            <ul id="menu_mb_ul" class="nt_mb_menu">
            
                <li class="menu-item menu-item-has-children only_icon_false">
                    <a href="shop-filter-sidebar.html"><span class="nav_link_txt flex al_center">Shop</span><span class="nav_link_icon ml__5"></span></a>
                    <ul class="sub-menu" style="display: none;">
                        <li class="menu-item">
                            <a href="{{ route('frontend.products') }}">Products List</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item menu-item-btns menu-item-acount">
                    @guest
                    <a href="#" class="push_side" data-id="#nt_login_canvas"><span class="iconbtns">Login/Register</span></a>
                    @endguest
                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf 
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" style="margin-left: 18px;">Logout</span></a>
                        </form>
                    @endauth
                </li>
             
                <li class="menu-item menu-item-infos">
                    <p class="menu_infos_title">Need help?</p>
                    <div class="menu_infos_text">
                        <i class="pegk pe-7s-call fwb mr__10"></i>+33306077<br><i class="pegk pe-7s-mail fwb mr__10"></i><a class="cg" href="mailto:claue@domain.com">claue@domain.com</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="kalles-section-mb_cat_js" class="mb_nav_tab">
        <div id="kalles-section-mb_cat" class="kalles-section">
            <ul id="menu_mb_cat" class="nt_mb_menu">
               
                @foreach (categories() as $item)
                <li class="menu-item">
                    <a href="{{ route('frontend.productbycategory', $item->id) }}">
                        {{-- <i class="las la-female mr__10 fs__20"></i> --}}
                        {{ $item->cat_name_en }}
                    </a>
                </li>
                @endforeach
                
            </ul>
        </div>
    </div>
</div>
<!-- end mobile menu -->

<!--discount promotion popup-->
<div id="kalles-section-promo_pr_pp" class="kalles-section mfp-hide dn">
    <div class="js_lz_pppr popup_prpr_wrap container bgw mfp-with-anim" data-stt='{ "pp_version": 1,"day_next": 1 }'>
        <div class="wrap_title">
            <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
                <span class="mr__10 ml__10">Wait! Can't find what you're looking for?</span>
            </h3>
            <span class="dn tt_divider"><span></span><i class="dn clprfalse title_2 la-gem"></i><span></span></span><span class="section-subtitle db tc sub-title">Maybe this will help...</span>
        </div>
        <div class="products nt_products_holder row row_pr_1 cdt_des_1 round_cd_false js_carousel nt_slider nt_cover ratio_nt position_8 space_ prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1" data-flickityjs='{"draggable":0,"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 1, "cellAlign": "left","wrapAround": false,"prevNextButtons": true,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>

            @foreach (prod() as $item)
            <div class="col-lg-3 col-md-4 col-12 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                <div class="product-inner pr">
                    <div class="product-image pr oh lazyload">
                        <span class="tc nt_labels pa pe_none cw">
                            <span class="nt_label new">New</span>
                        </span>
                        <a class="d-block" href="product-detail-layout-01.html">
                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $item->id }}.jpg">
                            </div>
                        </a>
                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $item->id }}.jpg"></div>
                        </div>
                        <div class="hover_button op__0 tc pa flex column ts__03">
                         
                            <a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                        </div>
                    </div>
                    <div class="product-info mt__15">
                        <h3 class="product-title pr fs__14 mg__0 fwm">
                            <a class="cd chp" href="product-detail-layout-01.html">{{ $item->prod_title_en }}</a>
                        </h3>
                        <span class="price dib mb__5">QAR {{ $item->price }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!--end discount promotion popup-->

<!-- back to top button-->
<a id="nt_backtop" class="pf br__50 z__100 des_bt1" href="#"><span class="tc br__50 db cw"><i class="pr pegk pe-7s-angle-up"></i></span></a>

{{-- <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/js/packery.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/flickity.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>
<script src="{{ asset('assets/js/js-cookie.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/photoswipe.min.js') }}"></script>
<script src="{{ asset('assets/js/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('assets/js/drift.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/resize-sensor.min.js') }}"></script>
<script src="{{ asset('assets/js/theia-sticky-sidebar.min.js') }}"></script>

@yield('js')


<script src="{{ asset('assets/js/interface.js') }}"></script>


<script>
    $(document).ready(function() {
        $("#register").on("click", function() {
            
            let firstname_en = $("#firstname_en").val();
            let lastname_en = $("#lastname_en").val();
            let email = $("#regEmail").val();
            let password = $("#regPassword").val();

            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
                url : "{{ route('custom.register') }}", 
                type : "POST",
                data : {
                    firstname_en : firstname_en,
                    lastname_en : lastname_en,
                    email : email,
                    password : password,
                },

                success: function(data)
                {
                    $("#register").addClass('d-none');
                   $("#reg_loader").removeClass('d-none');
                   setTimeout(function () {
                        $('#reg_loader').addClass('d-none');
                    } , 3000);
                    location.href = "{{ route('dashboard') }}";
                }, 
                error: function(data)
                {
                    $('#firstname_error').text(data.responseJSON.errors.firstname_en);
                    $('#lastname_error').text(data.responseJSON.errors.lastname_en);
                    $('#regEmail_error').text(data.responseJSON.errors.email);
                    $('#regPassword_error').text(data.responseJSON.errors.password);
                },

            });

        });
    });
</script>


<script>

   $(document).ready(function(){
      $("#login").on("click", function() {
        let email = $("#CustomerEmail").val(); 
        let password = $("#CustomerPassword").val();
        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
        
        $.ajax({
            url  : "{{ route('custom.login') }}", 
            type : "POST", 
            data : {
                email : email, 
                password : password,
            },
            success : function(data)
            {
               if(data.error){
                   
                   $("#loginError").html(data.error);
               }
               else 
               {
                   $("#login").addClass('d-none');
                   $("#loader").removeClass('d-none');
                   setTimeout(function () {
                        $('#loader').addClass('d-none');
                    } , 3000);
                    location.href = "{{ route('dashboard') }}";
                   
               }
            }
        });

      });
   });

  @foreach($carts as $item)
    $(document).ready(function () {
        $("#remove{{ $item->id }}").on("click", function(){
          
          let product_id   = $("input[name=product_id{{ $item->id }}]").val();
          let cart_amount  = $("input[name=cart_amount{{ $item->id }}]").val(); 

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
              url : "{{ route('cart.delete', $item->id) }}", 
              type: 'GET', 
              success: function(data)
              {
                  $("#cart-push").html(data.carts); 
                  $("#cart-count").html(data.total);
                  $("#cart-total").html(data.subtotal);
                  
              } 
          });

        });
    });
    @endforeach
</script>

</body>
</html>


