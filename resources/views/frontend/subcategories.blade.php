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

    <!--end shipping info-->
    <div class="kalles-section nt_section type_featured_collection tp_se_cdt">
        <div class="kalles-electronic-vertical__bestseller container">
            <div class="wrap_title des_title_2">
                <h3 class="section-title tc pr flex fl_center al_center fs__24 title_2">
                    <span class="mr__10 ml__10">SUB CATEGORIES</span>
                </h3>
                <span class="dn tt_divider"><span></span><i class="dn clprfalse title_2 la-gem"></i><span></span></span>
                <span class="section-subtitle db tc sub-title">Sub categories</span>
            </div>
        </div>
    </div>

    <!-- category banner section -->
    <div class="kalles-section nt_section type_carousel type_collection_list">
        <div class="kalles-electronic-vertical__cat-banner container">
            <div class="mt__30 nt_cats_holder row fl_center equal_nt hoverz_true ratio_cus1 cat_space_30 cat_design_1">
                @foreach ($subcats as $category)
                <div class="cat_grid_item cat_space_item cat_grid_item_1 col-lg-4 col-md-4 col-12">
                    <div class="cat_grid_item__content pr oh">
                        <a href="shop-left-sidebar.html" class="db cat_grid_item__link">
                            <div class="cat_grid_item__overlay item__position nt_bg_lz lazyload center" data-bgset="{{ asset('web_images/categories') }}/{{ $category->id }}.jpg"></div>
                        </a>
                        <div class="cat_grid_item__wrapper pe_none">
                            <div class="cat_grid_item__title">{{ ucfirst($category->subcat_name_en) }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end category banner section -->

    <!-- new arrival products-->

    <!-- end new arrival products-->
    <!-- recommended products-->

    <!-- end recommended products-->
    <!-- best price products-->
 
    <!-- end new arrival products-->
    <!-- best seller products-->

    <!-- end new arrival products-->



</div>

@endsection
