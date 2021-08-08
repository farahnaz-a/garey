@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | Contact us
@endsection

@section('content')
<div id="nt_content">

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
                <p>We love to hear from you on our customer service, merchandise, website or any topics you want to share with us. Your comments and suggestions will be appreciated. Please complete the form below.</p>
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