@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | Home Page
@endsection

@section('content')

<div id="nt_content">

    <!-- main slide -->
    <div class="kalles-section nt_section type_image_text_overlay">
        <div class="kalles-electronic-vertical__slide-banner nt_full txt_shadow_false se_height_cus_h nt_first">
            <div class="row equal_nt">
                <div class="col-12">
                    <div class="nt_img_txt oh pr middle center">
                        <div class="js_full_ht4 lazyload item__position bg_rp_norepeat bg_sz_cover center" data-bgset="{{ asset('web_images/home') }}/{{ $banner->banner_img }}"></div>
                        <div class="txt_content pa t__0 l__0 b__0 r__0 caption-w-2 flex column shadow_wrap tc pe_none z__100">
                            <div class="pa pa_txts">
                                <h3 class="mt__0 mg__0 lh__1" style="color: white;">{{ $banner->description }}</h3>
                                <div class="kalles-electronic-vertical__slide-banner-br imtt4_space"></div>
                                <a class="imtt4_btn button pe_auto round_false btn_icon_false" href="shop.html">shop now</a>
                            </div>
                        </div>
                        <a href="shop-hidden-sidebar.html" class="pa t__0 l__0 b__0 r__0"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main slide -->

    <!--shipping info-->
    <div class="kalles-section nt_section type_shipping bg-white">
        <div class="kalles-electronic-vertical__shiping-info container">
            <div class="row fl_wrap fl_wrap_md oah use_border_true">
                <div class="col-12 col-md-6 col-lg-4 mb__25">
                    <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                        <div class="col-auto icon large csi"><i class="las la-life-ring"></i></div>
                        <div class="col content">
                            <h3 class="title cd fs__14 mg__0 mb__5">SUPPORT 24/7</h3>
                            <p class="mg__0">we support 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb__25">
                    <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                        <div class="col-auto icon large csi"><i class="las la-sync-alt"></i></div>
                        <div class="col content">
                            <h3 class="title cd fs__14 mg__0 mb__5">30 DAYS RETURN</h3>
                            <p class="mg__0">you have 30 days to return</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb__25">
                    <div class="nt_shipping nt_icon_deafult tl row no-gutters al_center_">
                        <div class="col-auto icon large csi"><i class="las la-user-circle"></i></div>
                        <div class="col content">
                            <h3 class="title cd fs__14 mg__0 mb__5">PAYMENT 100% SECURE</h3>
                            <p class="mg__0">Payment 100% Secure</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end shipping info-->

    <!-- category banner section -->
    <div class="kalles-section nt_section type_carousel type_collection_list">
        <div class="kalles-electronic-vertical__cat-banner container">
            <div class="mt__30 nt_cats_holder row fl_center equal_nt hoverz_true ratio_cus1 cat_space_30 cat_design_1">
                @foreach (categories() as $category)
                <div class="cat_grid_item cat_space_item cat_grid_item_1 col-lg-4 col-md-4 col-12">
                    <div class="cat_grid_item__content pr oh">
                        <a href="{{ route('frontend.productbycategory', $category->id) }}" class="db cat_grid_item__link">
                            <div class="cat_grid_item__overlay item__position nt_bg_lz lazyload center" data-bgset="{{ asset('web_images/categories') }}/{{ $category->id }}.jpg"></div>
                        </a>
                        <div class="cat_grid_item__wrapper pe_none">
                            <div class="cat_grid_item__title">{{ ucfirst($category->cat_name_en) }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end category banner section -->

    <!-- new arrival products-->
    <div class="kalles-section nt_section type_featured_collection tp_se_cdt">
        <div class="kalles-electronic-vertical__bestseller container">
            <div class="wrap_title des_title_2">
                <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
                    <span class="mr__10 ml__10">NEW ARRIVAL</span>
                </h3>
                <span class="dn tt_divider"><span></span><i class="dn clprfalse title_2 la-gem"></i><span></span></span>
                <span class="section-subtitle db tc sub-title">New Products in last 30 days</span>
            </div>
            <div class="products nt_products_holder row fl_center row_pr_2 cdt_des_1 round_cd_false nt_cover ratio1_1 position_8 space_30 equal_nt">
               @forelse ($newArrivals->take(8) as $new)
               <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                <div class="product-inner pr">
                    <div class="product-image pr oh lazyload">
                        {{-- <span class="tc nt_labels pa pe_none cw">
                            <span class="onsale nt_label"><span>-29%</span></span>
                        </span> --}}
                        <a class="db" href="{{ route('frontend.productDetails', $new->id) }}">
                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $new->id }}.jpg"></div>
                        </a>
                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $new->id }}.jpg"></div>
                        </div>
                        {{-- <div class="nt_add_w ts__03 pa">
                            <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                            </a>
                        </div> --}}
                        <div class="hover_button op__0 tc pa flex column ts__03">
                            {{-- <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                            </a> --}}
                            <form method="POST" action="{{ route('cart.store') }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $new->get_product_info->id ?? '' }}">
                                <input type="hidden" name="cart_amount" value="1">
                                <a href="{{ route('cart.store') }}" onclick="event.preventDefault();
                            this.closest('form').submit();" class="pr pr_atc cd br__40 bgw tc dib  cb chp ttip_nt tooltip_top_left">
                                                <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span>
                                            </a>
                            </form>
                        </div>
                    </div>
                    <div class="product-info mt__15">
                        <h3 class="product-title pr fs__14 mg__0 fwm">
                            <a class="cd chp" href="{{ route('frontend.productDetails', $new->id) }}">{{ $new->prod_title_en }}</a>
                        </h3>
                        <span class="price dib mb__5"><ins>QAR {{ $new->price }}</ins></span>
                    </div>
                </div>
            </div>

            @empty
                <h3>New Products coming soon.</h3>
               @endforelse
            </div>
            <div class="products-footer tc mt__40">
                <a class="se_cat_lm pr nt_cat_lm button button_dark br_rd_false btn_icon_false" href="#">View All</a>
            </div>
        </div>
    </div>
    <!-- end new arrival products-->
    <!-- recommended products-->
    <div class="kalles-section nt_section type_featured_collection tp_se_cdt">
        <div class="kalles-electronic-vertical__bestseller container">
            <div class="wrap_title des_title_2">
                <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
                    <span class="mr__10 ml__10">Recommended</span>
                </h3>
                <span class="dn tt_divider"><span></span><i class="dn clprfalse title_2 la-gem"></i><span></span></span>
                <span class="section-subtitle db tc sub-title">Our Recommended products</span>
            </div>
            <div class="products nt_products_holder row fl_center row_pr_2 cdt_des_1 round_cd_false nt_cover ratio1_1 position_8 space_30 equal_nt">
               @forelse ($recommended->take(8) as $new)
               <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                <div class="product-inner pr">
                    <div class="product-image pr oh lazyload">
                        {{-- <span class="tc nt_labels pa pe_none cw">
                            <span class="onsale nt_label"><span>-29%</span></span>
                        </span> --}}
                        <a class="db" href="{{ route('frontend.productDetails', $new->id) }}">
                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $new->id }}.jpg"></div>
                        </a>
                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $new->id }}.jpg"></div>
                        </div>
                        {{-- <div class="nt_add_w ts__03 pa">
                            <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                            </a>
                        </div> --}}
                        <div class="hover_button op__0 tc pa flex column ts__03">
                            {{-- <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                            </a> --}}
                            <form method="POST" action="{{ route('cart.store') }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $new->get_product_info->id ?? '' }}">
                                <input type="hidden" name="cart_amount" value="1">
                                <a href="{{ route('cart.store') }}" onclick="event.preventDefault();
                            this.closest('form').submit();" class="pr pr_atc cd br__40 bgw tc dib  cb chp ttip_nt tooltip_top_left">
                                                <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span>
                                            </a>
                            </form>
                        </div>
                    </div>
                    <div class="product-info mt__15">
                        <h3 class="product-title pr fs__14 mg__0 fwm">
                            <a class="cd chp" href="{{ route('frontend.productDetails', $new->id) }}">{{ $new->prod_title_en }}</a>
                        </h3>
                        <span class="price dib mb__5"><ins>QAR {{ $new->price }}</ins></span>
                    </div>
                </div>
            </div>
            @empty
                <h3>Recommended products coming soon.</h3>
               @endforelse
            </div>
            <div class="products-footer tc mt__40">
                <a class="se_cat_lm pr nt_cat_lm button button_dark br_rd_false btn_icon_false" href="#">View All</a>
            </div>
        </div>
    </div>
    <!-- end recommended products-->
    <!-- best price products-->
    <div class="kalles-section nt_section type_featured_collection tp_se_cdt">
        <div class="kalles-electronic-vertical__bestseller container">
            <div class="wrap_title des_title_2">
                <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
                    <span class="mr__10 ml__10">Best Value</span>
                </h3>
                <span class="dn tt_divider"><span></span><i class="dn clprfalse title_2 la-gem"></i><span></span></span>
                <span class="section-subtitle db tc sub-title">Our best valued products</span>
            </div>
            <div class="products nt_products_holder row fl_center row_pr_2 cdt_des_1 round_cd_false nt_cover ratio1_1 position_8 space_30 equal_nt">
               @forelse ($bestValues->take(8) as $new)
               <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                <div class="product-inner pr">
                    <div class="product-image pr oh lazyload">
                        {{-- <span class="tc nt_labels pa pe_none cw">
                            <span class="onsale nt_label"><span>-29%</span></span>
                        </span> --}}
                        <a class="db" href="{{ route('frontend.productDetails', $new->id) }}">
                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $new->id }}.jpg"></div>
                        </a>
                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $new->id }}.jpg"></div>
                        </div>
                        {{-- <div class="nt_add_w ts__03 pa">
                            <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                            </a>
                        </div> --}}
                        <div class="hover_button op__0 tc pa flex column ts__03">
                            {{-- <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                            </a> --}}
                            <form method="POST" action="{{ route('cart.store') }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $new->get_product_info->id ?? '' }}">
                                <input type="hidden" name="cart_amount" value="1">
                                <a href="{{ route('cart.store') }}" onclick="event.preventDefault();
                            this.closest('form').submit();" class="pr pr_atc cd br__40 bgw tc dib  cb chp ttip_nt tooltip_top_left">
                                                <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span>
                                            </a>
                            </form>
                        </div>
                    </div>
                    <div class="product-info mt__15">
                        <h3 class="product-title pr fs__14 mg__0 fwm">
                            <a class="cd chp" href="{{ route('frontend.productDetails', $new->id) }}">{{ $new->prod_title_en }}</a>
                        </h3>
                        <span class="price dib mb__5"><ins>QAR {{ $new->price }}</ins></span>
                    </div>
                </div>
            </div>
            @empty
                <h3>Best Price products coming soon.</h3>
               @endforelse
            </div>
            <div class="products-footer tc mt__40">
                <a class="se_cat_lm pr nt_cat_lm button button_dark br_rd_false btn_icon_false" href="#">View All</a>
            </div>
        </div>
    </div>
    <!-- end new arrival products-->
    <!-- best seller products-->
    <div class="kalles-section nt_section type_featured_collection tp_se_cdt">
        <div class="kalles-electronic-vertical__bestseller container">
            <div class="wrap_title des_title_2">
                <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
                    <span class="mr__10 ml__10">BESTSELLER</span>
                </h3>
                <span class="dn tt_divider"><span></span><i class="dn clprfalse title_2 la-gem"></i><span></span></span>
                <span class="section-subtitle db tc sub-title">Top seller in the week</span>
            </div>
            <div class="products nt_products_holder row fl_center row_pr_2 cdt_des_1 round_cd_false nt_cover ratio1_1 position_8 space_30 equal_nt">
               @forelse ($bestSellers as $new)
               <div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__2 tc">
                <div class="product-inner pr">
                    <div class="product-image pr oh lazyload">
                        {{-- <span class="tc nt_labels pa pe_none cw">
                            <span class="onsale nt_label"><span>-29%</span></span>
                        </span> --}}
                        <a class="db" href="{{ route('frontend.productDetails', $new->get_product_info->id ?? '') }}">
                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $new->get_product_info->id ?? '' }}.jpg"></div>
                        </a>
                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__100" data-bgset="{{ asset('web_images/products/thumb') }}/{{ $new->get_product_info->id ?? '' }}.jpg"></div>
                        </div>
                        {{-- <div class="nt_add_w ts__03 pa">
                            <a href="#" class="wishlistadd cb chp ttip_nt tooltip_right">
                                <span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i>
                            </a>
                        </div> --}}
                        <div class="hover_button op__0 tc pa flex column ts__03">
                            {{-- <a class="pr nt_add_qv js_add_qv cd br__40 pl__25 pr__25 bgw tc dib ttip_nt tooltip_top_left" href="#">
                                <span class="tt_txt">Quick view</span><i class="iccl iccl-eye"></i><span>Quick view</span>
                            </a> --}}
                             <form method="POST" action="{{ route('cart.store') }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $new->get_product_info->id ?? '' }}">
                                <input type="hidden" name="cart_amount" value="1">
                                <a href="{{ route('cart.store') }}" onclick="event.preventDefault();
                            this.closest('form').submit();" class="pr pr_atc cd br__40 bgw tc dib  cb chp ttip_nt tooltip_top_left">
                                                <span class="tt_txt">Add to cart</span><i class="iccl iccl-cart"></i><span>Add to cart</span>
                                            </a>
                            </form>
                            
                        </div>
                    </div>
                    <div class="product-info mt__15">
                        <h3 class="product-title pr fs__14 mg__0 fwm">
                            <a class="cd chp" href="{{ route('frontend.productDetails', $new->get_product_info->id ??'') }}">{{ $new->get_product_info->prod_title_en ?? '' }}</a>
                        </h3>
                        <span class="price dib mb__5"><ins>QAR {{ $new->get_product_info->price ?? '' }}</ins></span>
                    </div>
                </div>
            </div>
            @empty
                <h3>Best selling products coming soon.</h3>
               @endforelse
            </div>
            <div class="products-footer tc mt__40">
                <a class="se_cat_lm pr nt_cat_lm button button_dark br_rd_false btn_icon_false" href="#">View All</a>
            </div>
        </div>
    </div>
    <!-- end new arrival products-->



</div>

@endsection
