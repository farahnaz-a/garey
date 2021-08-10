@extends('layouts.frontend')

@section('title')
    Garey Store for Electronics in Qatar | {{ \App\Models\Category::find($data->prod_cat_id)->cat_name_en }} | {{ \App\Models\Subcategory::find($data->prod_subcat_id)->subcat_name_en }} | {{ $data->prod_title_en }}
@endsection

@section('css')
<style>
    .nt_bg_lz{
        padding-top: 84% !important;
    }
</style>
@endsection


@section('content')
<div id="nt_content">
    <div class="sp-single sp-single-4 des_pr_layout_1 mb__60">

        <!-- breadcrumb -->
        <div class="bgbl pt__20 pb__20 lh__1">
            <div class="container">
                <div class="row al_center">
                    <div class="col">
                         <nav class="sp-breadcrumb">
                            <a href="{{ url('/') }}">Home</a>
                            <i class="facl facl-angle-right"></i>
                            <a href="{{ route('frontend.productbycategory', $data->prod_cat_id) }}">{{ \App\Models\Category::find($data->prod_cat_id)->cat_name_en }}</a>
                            <i class="facl facl-angle-right"></i>
                            <a href="{{ route('frontend.productbysubcategory', $data->prod_subcat_id) }}">{{ \App\Models\Subcategory::find($data->prod_subcat_id)->subcat_name_en }}</a>
                            <i class="facl facl-angle-right"></i>{{ $data->prod_title_en }}
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

        <div class="container container_cat cat_default">
            <div class="row product mt__40">
                <div class="col-md-12 col-12 thumb_bottom">
                    <div class="row mb__50 pr_sticky_content">

                        <!-- product thumbnails -->
                        <div class="col-md-6 col-12 pr product-images img_action_zoom pr_sticky_img kalles_product_thumnb_slide">
                            <div class="row theiaStickySidebar">
                                <div class="col-12 col_thumb">
                                    <div class="p-thumb p-thumb_ppr images sp-pr-gallery equal_nt nt_contain ratio_imgtrue position_8 nt_slider pr_carousel" data-flickity='{"initialIndex": ".media_id_001","fade":true,"draggable":">1","cellSelector": ".p-item:not(.is_varhide)","cellAlign": "center","wrapAround": true,"autoPlay": false,"prevNextButtons":true,"adaptiveHeight": true,"imagesLoaded": false, "lazyLoad": 0,"dragThreshold" : 6,"pageDots": false,"rightToLeft": false }'>
                                        <div
                                                data-grname="not4"
                                                data-grpvl="ntt4"
                                                class="img_ptw p_ptw js-sl-item p-item sp-pr-gallery__img w__100 nt_bg_lz lazyload media_id_001"
                                                data-mdid="001"
                                                data-mdtype="image"
                                                data-bgset="{{ asset('web_images/products/thumb') }}/{{ $data->id ?? '' }}.jpg"
                                                data-src="{{ asset('web_images/products/thumb') }}/{{ $data->id ?? '' }}.jpg"
                                                data-ratio="0.7838776928422516"
                                                data-width="1200"
                                                data-height="800"
                                                data-cap="{{ $data->prod_title_en }}"
                                                style="padding-top:70%"
                                        >
                                            <img class="op_0 dn" src="" alt="{{ $data->prod_title_en }}"/>
                                        </div>
                                        @foreach (\App\Models\ProductImage::where('prod_id', $data->id)->get() as $item)
                                        <div
                                        data-grname="not4"
                                        data-grpvl="ntt4"
                                        class="img_ptw p_ptw js-sl-item p-item sp-pr-gallery__img w__100 nt_bg_lz lazyload media_id_002"
                                        data-mdid="002"
                                        data-mdtype="image"
                                        data-bgset="{{ asset('web_images/products') }}/{{ $item->id ?? '' }}.jpg"
                                        data-src="{{ asset('web_images/products') }}/{{ $item->id ?? '' }}.jpg"
                                        data-ratio="0.7838776928422516"
                                        data-width="1200"
                                        data-height="800"
                                        data-cap="{{ $data->prod_title_en }}"
                                        style="padding-top:70%;"
                                >
                                    <img class="op_0 dn" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="{{ $data->prod_title_en }}"/>
                                </div>
                                        @endforeach
                                    </div>
                                    <span class="tc nt_labels pa pe_none cw"></span>
                                    <div class="p_group_btns pa flex">
                                        <button class="br__40 tc flex al_center fl_center bghp show_btn_pr_gallery ttip_nt tooltip_top_left">
                                            <i class="las la-expand-arrows-alt"></i><span class="tt_txt">Click to enlarge</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col_nav nav_medium">
                                    <div class="p-nav ratio_imgtrue row equal_nt nt_cover position_8 nt_slider pr_carousel" data-flickityjs='{"cellSelector": ".n-item:not(.is_varhide)","cellAlign": "left","asNavFor": ".p-thumb","wrapAround": true,"draggable": ">1","autoPlay": 0,"prevNextButtons": 0,"percentPosition": 1,"imagesLoaded": 0,"pageDots": 0,"groupCells": true,"rightToLeft": false,"contain":  1,"freeScroll": 0}'></div>
                                </div>
                                <div class="dt_img_zoom pa t__0 r__0 dib"></div>
                            </div>
                        </div>
                        <!-- end product thumbnails -->

                        <!-- product info -->
                        <div class="col-md-6 col-12 product-infors pr_sticky_su">
                            <div class="theiaStickySidebar">
                                <div class="kalles-section-pr_summary kalles-section summary entry-summary mt__30">
                                    <h1 class="product_title entry-title fs__16">{{ $data->prod_title_en }}</h1>
                                    <div class="flex wrap fl_between al_center price-review">
                                        <p class="price_range" id="price_ppr">QAR {{ $data->price }}</p>
                                    
                                    </div>
                                    <div class="pr_short_des">
                                        <p class="mg__0">{{ $data->prod_details_en }}</p>
                                    </div>
                                    <div class="btn-atc atc-slide btn_des_1 btn_txt_3">
                                        <div id="callBackVariant_ppr">
                                            <div class="nt_cart_form variations_form variations_form_ppr">
                                                <div class="variations_button in_flex column w__100 buy_qv_false">
                                                    <div class="flex wrap">
                                                        <div class="quantity pr mr__10 order-1 qty__true d-inline-block" id="sp_qty_ppr">
                                                            {{-- <form method="POST" action="{{ route('cart.store') }}"> --}}
                                                            <form id="ajaxCart">
                                                                {{-- @csrf --}}
                                                                <input type="hidden" name="product_id" value="{{ $data->id ?? '' }}">
                                                            <input type="number" class="input-text qty text tc qty_pr_js qty_cart_js" name="cart_amount" value="1">
                                                            <div class="qty tc fs__14">
                                                                <button type="button" class="plus db cb pa pd__0 pr__15 tr r__0">
                                                                    <i class="facl facl-plus"></i></button>
                                                                <button type="button" class="minus db cb pa pd__0 pl__15 tl l__0">
                                                                    <i class="facl facl-minus"></i></button>
                                                            </div>
                                                        </div>
                                                        <button type="button" id="addCart" data-time="6000" data-ani="shake" style="background: #861f3d;border : none; color: #fff;" class="single_add_to_cart_button button truncate w__100  order-4 d-inline-block animated">
                                                            <span class="txt_add ">Add to cart</span>
                                                        </button>
                                                        {{-- <form method="POST" action="{{ route('cart.store') }}">
                                                            @csrf
                                                            <input type="hidden" name="product_id" value="{{ $new->get_product_info->id ?? '' }}">
                                                            <input type="hidden" name="cart_amount" value="1">
                                                            <a href="{{ route('cart.store') }}" onclick="event.preventDefault();
                                                        this.closest('form').submit();" class="pr pr_atc cd br__40 bgw tc dib  cb chp ttip_nt tooltip_top_left">
                                                                            <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span>
                                                                        </a> --}}
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="trust_seal_ppr" class="pr_trust_seal tl_md tc">

                                        <img class="img_tr_s1 lazyload w__100 max-width__330px" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%202244%20285%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" alt="" data-srcset="assets/images/single-product/trust_img2.png"/>
                                    </div>
                                    <div class="social-share tc">
                                        <div class="at-share-btn-elements kalles-social-media d-block text-left fs__0 lh__1">
                                            <a href="https://www.facebook.com/gareystore" class="at-icon-wrapper at-share-btn at-svc-facebook bg-white kalles-social-media__btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-facebook">
                                                    <g>
                                                        <path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="mailto:info@gareyqatar.com" class="at-icon-wrapper at-share-btn at-svc-email bg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-email kalles-social-media__btn">
                                                    <g>
                                                        <g fill-rule="evenodd"></g>
                                                        <path d="M27 22.757c0 1.24-.988 2.243-2.19 2.243H7.19C5.98 25 5 23.994 5 22.757V13.67c0-.556.39-.773.855-.496l8.78 5.238c.782.467 1.95.467 2.73 0l8.78-5.238c.472-.28.855-.063.855.495v9.087z"></path>
                                                        <path d="M27 9.243C27 8.006 26.02 7 24.81 7H7.19C5.988 7 5 8.004 5 9.243v.465c0 .554.385 1.232.857 1.514l9.61 5.733c.267.16.8.16 1.067 0l9.61-5.733c.473-.283.856-.96.856-1.514v-.465z"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                            <a href="https://www.instagram.com/gareyqatar" class="at-icon-wrapper at-share-btn at-svc-pinterest_share bg-white kalles-social-media__btn">
                                               <img src="{{ asset('in.svg') }}" width="20" style="margin-bottom: 5px; height: 18px;" alt="">
                                            </a>
                                            <a href="https://wa.me/+97433306077" class="at-icon-wrapper at-share-btn at-svc-messenger bg-white kalles-social-media__btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="at-icon at-icon-messenger">
                                                    <g>
                                                        <path d="M16 6C9.925 6 5 10.56 5 16.185c0 3.205 1.6 6.065 4.1 7.932V28l3.745-2.056c1 .277 2.058.426 3.155.426 6.075 0 11-4.56 11-10.185C27 10.56 22.075 6 16 6zm1.093 13.716l-2.8-2.988-5.467 2.988 6.013-6.383 2.868 2.988 5.398-2.987-6.013 6.383z" fill-rule="evenodd"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end product info -->

                    </div>
                </div>
            </div>
        </div>

        <!-- description and review -->
        <div id="wrap_des_pr">
            <div class="container container_des">
                <div class="kalles-section-pr_description kalles-section kalles-tabs sp-tabs nt_section">

                    <!-- tab buttons -->
                    <ul class="ul_none ul_tabs is-flex fl_center fs__16 des_mb_2 des_style_1">
                        <li class="tab_title_block active">
                            <a class="db cg truncate pr" href="#tab_product_description">Description</a>
                        </li>
                       
                        {{-- <li class="tab_title_block">
                            <a class="db cg truncate pr" href="#tab_reviews_product">Reviews</a>
                        </li> --}}
                    </ul>
                    <!-- end tab buttons -->

                    <!-- tab contents -->
                    <div class="panel entry-content sp-tab des_mb_2 des_style_1 active" id="tab_product_description">
                        <div class="js_ck_view"></div>
                        <div class="heading bgbl dn">
                            <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_product_description"><span class="txt_h_tab">Description</span><span style="background: #861f3d !important;" class="nav_link_icon ml__5"></span></a>
                        </div>
                        <div class="sp-tab-content">
                            <div class="row al_center">
                                <div class="col-12 col-md-6 mt__10 mb__20">
                                  <p class="cb">
                                      {{ $data->prod_details_en }}
                                  </p>
                                </div>
                                <div class="col-12 col-md-6 mt__10 mb__20">
                                    <div class="row">
                                        <div class="col-12 col-md-6 mb__30">
                                            <div class="tc">
                                                <i class="pegk pe-7s-car fs__40"></i>
                                                <div class="info-box-content">
                                                    <h4 class="box-title">FAST DELIVERY IN QATAR</h4>
                                                    <span class="box-inner cb">We deliver within 24-48 hours</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 mb__30">
                                            <div class="tc">
                                                <i class="pegk pe-7s-help2 fs__40"></i>
                                                <div class="info-box-content">
                                                    <h4 class="box-title">SUPPORT 24/7</h4>
                                                    <span class="box-inner cb">Contact us 24 hours a day, 7 days a week</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="tc">
                                                <i class="pegk pe-7s-refresh fs__40"></i>
                                                <div class="info-box-content">
                                                    <h4 class="box-title">7 DAYS RETURN</h4>
                                                    <span class="box-inner cb">Simply return it as received within 7 days for an exchange</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="tc">
                                                <i class="pegk pe-7s-door-lock fs__40"></i>
                                                <div class="info-box-content">
                                                    <h4 class="box-title">CASH ON DELIVERY</h4>
                                                    <span class="box-inner cb">Shop safely with confidence</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel entry-content sp-tab des_mb_2 des_style_1 dn" id="tab_reviews_product">
                        <div class="js_ck_view"></div>
                    </div>
                    <!-- end tab contents -->
                </div>
            </div>
        </div>
        <!-- end description and review -->

        <div class="clearfix"></div>

        <!--product recommendations section-->
        <div class="kalles-section tp_se_cdt">
            <div class="related product-extra mt__60 lazyload">
                <div class="container">
                    <div class="wrap_title des_title_1">
                        <h3 class="section-title tc pr flex fl_center al_center fs__24 title_1">
                            <span class="mr__10 ml__10">You may also like</span></h3>
                        <span class="dn tt_divider"><span></span><i class="dn clprfalse title_1 la-gem"></i><span></span></span><span class="section-subtitle db tc sub-title"></span>
                    </div>
                    <div class="products nt_products_holder nt_slider row row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 prev_next_0 btn_owl_1 dot_owl_1 dot_color_1 btn_vi_1 is-draggable" data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": false,"percentPosition": 1,"pageDots": false, "autoPlay" : 0, "pauseAutoPlayOnHover" : true, "rightToLeft": false }'>
                       @foreach (youmaylike($data->prod_cat_id) as $key => $product)
                           @if($product->id != $data->id)
                           <div class="col-lg-3 pr_animated col-md-3 col-6 mt__30 pr_grid_item product nt_pr desgin__1 done">
                            <div class="product-inner pr">
                                <div class="product-image pr oh lazyload">
                                    @if($key == 0)
                                    <span class="tc nt_labels pa pe_none cw"><span class="nt_label new">New</span></span>
                                    @endif
                                    <a class="d-block" href="{{ route('frontend.productDetails', $product->id ?? '') }}">
                                        <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $product->id }}.jpg"></div>
                                    </a>
                                    <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                        <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $product->id }}.jpg"></div>
                                    </div>
                                    <div class="hover_button op__0 tc pa flex column ts__03">
                                   
                                        <a href="{{ route('frontend.productDetails', $product->id ?? '') }}" class="pr pr_atc cd br__40 bgw tc dib cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                                    </div>
                                </div>
                                <div class="product-info mt__15">
                                    <h3 class="product-title pr fs__14 mg__0 fwm">
                                        <a class="cd chp" href="{{ route('frontend.productDetails', $product->id ?? '') }}">{{ $product->prod_title_en }}</a>
                                    </h3>
                                    <span class="price dib mb__5">QAR {{ $product->price }}</span>
                                </div>
                            </div>
                        </div>
                           @endif

                       @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--end product recommendations section-->

@endsection

@section('js')
<script>
    $(document).ready(function () {
        $("#addCart").click(function(){
          let product_id   = $("input[name=product_id]").val();
          let cart_amount  = $("input[name=cart_amount]").val(); 

          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          $.ajax({
              url : '/cart-save', 
              type: 'POST', 
              data: {
                  product_id : product_id, 
                  cart_amount : cart_amount, 
              }, 
              success: function(data)
              {
                  $("#cart-push").html(data.carts); 
                  $("#cart-count").html(data.total);
                  $("#guno").html(data.total);
                  $("#cart-total").html(data.subtotal);
                 
                  
              } 
          });

        });
    });
</script>
@endsection