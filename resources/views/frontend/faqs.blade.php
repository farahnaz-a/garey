@extends('layouts.frontend')

@section('title')
Garey Store for Electronics in Qatar | Frequently Asked Questions
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
                                    <i class="facl facl-angle-right"></i>Frequently Asked Questions
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
    <div class="container cb">
        <div id="kalles-section-faqs" class="kalles-section nt_section type_faq js_faq_ad mt__50 mb__50">
            <div class="kalles-tabs sp-tabs">
                <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn" id="tab_faqs-0">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_faqs-0"><span class="txt_h_tab">What are the payment methods?</span><span style="background: #861f3d;" class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <p class="mb-2">Garey store currently accepts cash payment upon delivery only. We are working to provide you with more payment options in the near future.</p>
                    </div>
                </div>
                <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn" id="tab_faqs-1">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_faqs-1"><span class="txt_h_tab">What are the delivery locations?</span><span style="background: #861f3d;" class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <p class="mb-0">We deliver across the entire country of Qatar, delivery fee is subject to location.
                        </p>
                    </div>
                </div>
                <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn" id="tab_faqs-2">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_faqs-2"><span class="txt_h_tab">What is the return policy?</span><span style="background: #861f3d;" class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <p class="mb-0">We provide free of charge exchange of manufacture damaged or defective product within the first week of purchase. Following the first week, We provide service warranty for applicable products for a small fee of 100 QR which includes pick up, servicing the product, and redelivering back.
                        </p>
                    </div>
                </div>
                <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn" id="tab_faqs-3">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_faqs-3"><span class="txt_h_tab">What kind of warranty is provided?</span><span style="background: #861f3d;" class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <p class="mb-0">We either provide local dealer warranty for the best and fastest service or we service products warranted by Garey Store.
                        </p>
                    </div>
                </div>
                <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn" id="tab_1600934637620">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_1600934637620"><span class="txt_h_tab">How does the service warranty work?</span><span style="background: #861f3d;" class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <p class="mb-0">Upon customer request for product service, we will pick up the product and service it within the dealer timeframe and return it back as soon as it is ready.</p>
                    </div>
                </div>
                <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn" id="tab_1600934655033">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_1600934655033"><span class="txt_h_tab">How long usually the ordered is delivered?</span><span style="background: #861f3d" class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <p class="mb-0">We aim to be among the fastest delivery stores in Qatar, we currently delivery within 24hrs and we are doing our best to even deliver faster.
                        </p>
                    </div>
                </div>
                <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn" id="tab_1600934674204">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_1600934674204"><span class="txt_h_tab">Can an order be delivered as gift?</span><span style="background: #861f3d" class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <p class="mb-0">We do not offer gift wrapping in the meantime, however, if you wish to surprise your loved one, we can arrange to hide the bill and collocet the payment in advance, please contact the customer support for assistance.
                        </p>
                    </div>
                </div>
                <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn" id="tab_1600935417107">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_1600935417107"><span class="txt_h_tab">Can an order be shipped outside Qatar?</span><span style="background: #861f3d" class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <p class="mb-0">Unfortunately, we do not offer shipments outside Qatar.
                        </p>
                    </div>
                </div>
                <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn" id="tab_16009354171071">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_16009354171071"><span class="txt_h_tab">What can be done if a product cannot be found?</span><span style="background: #861f3d" class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <p class="mb-0">You may contact our customer support team, we do our best to get you the product you need or at least an alternative that functions the same way.
                        </p>
                    </div>
                </div>
                <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn" id="tab_160093541710712">
                    <div class="js_ck_view"></div>
                    <div class="heading bgbl dn">
                        <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_160093541710712"><span class="txt_h_tab">Can the store be visited?</span><span style="background: #861f3d" class="nav_link_icon ml__5"></span></a>
                    </div>
                    <div class="sp-tab-content">
                        <p class="mb-0">We are a local online company and cannot meet in person at our store. However, if you have any concern or enquiry about a product, our team is ready to support.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection