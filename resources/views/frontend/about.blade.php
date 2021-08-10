@extends('layouts.frontend')

@section('title')
Garey Store for Electronics in Qatar | About us
@endsection

@section('content')
<div id="nt_content">

    <!--hero banner-->
    {{-- <div class="kalles-section page_section_heading">
        <div class="page-head tc pr oh cat_bg_img page_head_">
            <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0" data-bgset="assets/images/shop/collection-list/bg-heading.jpg"></div>
            <div class="container pr z_100">
                <h1 class="mb__5 cw">Terms & Conditions</h1>
            </div>
        </div>
    </div> --}}
    <!--end hero banner-->
                <!-- breadcrumb -->
                <div class="bgbl pt__20 pb__20 lh__1">
                    <div class="container">
                        <div class="row al_center">
                            <div class="col">
                                 <nav class="sp-breadcrumb">
                                    <a href="{{ url('/') }}">Home</a>
                                    {{-- <i class="facl facl-angle-right"></i> --}}
                                    <i class="facl facl-angle-right"></i>About us
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

    <!--page content-->
    <div class="kalles-section container mt__50 mb__50">
        <div class="terms cb">
            <div class="kalles-term-exp mb__20">
                <h3 class="fs__18 mt-0">Who we are</h3>
                <p>
                    Welcome to Qatar's first specialized electronics & consumables shopping online store providing latest in techonlogy at competitive prices. Garey Store is operated by Garey Trading Company - Qatar, a 100% Qatari Company, aiming to provide one platform for the best and top quality electronics products along with best and fastest home delivery service.
                </p>
                <p style="margin-top: 50px;">
                    Garey Trading Company, P.o.Box: 21439 Doha - Qatar
                </p>
            </div>
        </div>
    </div>
    <!--end page content-->

</div>
@endsection