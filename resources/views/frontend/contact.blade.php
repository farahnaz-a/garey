@extends('layouts.frontend')

@section('title')
Garey Store for Electronics in Qatar | Contact us
@endsection

@section('content')
<div id="nt_content">
            <!-- breadcrumb -->
            <div class="bgbl pt__20 pb__20 lh__1">
                <div class="container">
                    <div class="row al_center">
                        <div class="col">
                             <nav class="sp-breadcrumb">
                                <a href="{{ url('/') }}">Home</a>
                                {{-- <i class="facl facl-angle-right"></i> --}}
                                <i class="facl facl-angle-right"></i>Contact us
                            </nav> 
                        </div>
                      {{--  <div class="col-auto flex al_center">
                            <a href="product-detail-layout-01.html" class="pl__5 pr__5 fs__18 cd chp ttip_nt tooltip_bottom_left"><i class="las la-angle-left"></i><span class="tt_txt">Cream women pants</span></a>
                            <a href="product-detail-layout-01.html" class="pl__5 pr__5 fs__20 cd chp ttip_nt tooltip_bottom_left"><i class="fwb iccl iccl-grid fs__15"></i><span class="tt_txt">Back to New Arrival</span></a>
                            <a href="product-detail-layout-01.html" class="pl__5 pr__5 fs__18 cd chp ttip_nt tooltip_bottom_left"><i class="las la-angle-right"></i><span class="tt_txt">Short Sleeved Hoodie</span></a>
                        </div>   --}}
                    </div>
                </div>
            </div>
            <!-- end breadcrumb -->

    <!--hero banner-->
    {{-- <div class="kalles-section page_section_heading">
        <div class="page-head tc pr oh cat_bg_img page_head_">
            <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0" data-bgset="assets/images/shop/shop-banner.jpg"></div>
            <div class="container pr z_100">
                <h1 class="mb__5 cw">Contact Us</h1>
                <p class="mg__0">Follow your passion, and success will follow you</p>
            </div>
        </div>
    </div> --}}
    <!--end hero banner-->

    <!--page content-->
    <div class="kalles-section container mb__50 cb">
        <div class="row fl_center">
            {{-- <div class="contact-form col-12 col-md-6 order-1 order-md-0">
                <form method="post" action="#" class="contact-form">
                    <h3 class="mb__20 mt__40">DROP US A LINE</h3>
                    <p>
                        <label for="ct-name">Your Name (required)</label>
                        <input required="required" type="text" id="ct-name" name="ct-name" value="">
                    </p>
                    <p>
                        <label for="ct-email">Your Email (required)</label>
                        <input required="required" type="email" id="ct-email" name="ct-email" value="">
                    </p>
                    <p>
                        <label for="ct-phone">Your Phone Number</label>
                        <input type="tel" id="ct-phone" name="ct-phone" pattern="[0-9\-]*" value="">
                    </p>
                    <p>
                        <label for="ct-message">Your Message</label>
                        <textarea rows="20" id="ct-message" name="ct-message" required="required"></textarea>
                    </p>
                    <input type="submit" class="button w__100" value="Send">
                </form>
            </div> --}}
            <div class="contact-content col-12 col-md-6 m-auto order-0 order-md-1">
                <h3 class="mb__20 mt__40">CONTACT INFORMATION</h3>
                <p>We love to hear from you on our customer service, merchandise, website or any topics you want to share with us. Your comments and suggestions will be appreciated.</p>
                <p class="mb__5 d-flex"><i class="las la-home fs__20 mr__10 text-primary"></i>662 Street, Wakra, Qatar</p>
                <p class="mb__5 d-flex"><i class="las la-phone fs__20 mr__10 text-primary"></i>  +974 33306077</p>
                <p class="mb__5 d-flex"><i class="las la-envelope fs__20 mr__10 text-primary"></i> info@gareyqatar.com</p>
                <p class="mb__5 d-flex"><i class="las la-clock fs__20 mr__10 text-primary"></i> Everyday 9:00-17:00</p>
            </div>
        </div>
    </div>
    <!--end page content-->

</div>

@endsection