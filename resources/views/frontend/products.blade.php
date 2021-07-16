@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | Product Lists
@endsection

@section('content')

  <!--shop banner-->
  <div class="kalles-section page_section_heading">
    <div class="page-head tc pr oh cat_bg_img page_head_">
        <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0" data-bgset="{{ asset('assets/images/shop/shop-banner.jpg') }}"></div>
        <div class="container pr z_100">
            <h1 class="mb__5 cw">Products</h1>
            <p class="mg__0">Shop through our latest selection of products.</p>
        </div>
    </div>
</div>
<!--end shop banner-->

<div class="container container_cat pop_default cat_default mb__20">

    <!--grid control-->
    <div class="cat_toolbar row fl_center al_center mt__30">
        <div class="cat_filter col op__0 pe_none">
            <a href="#" data-opennt="#kalles-section-nt_filter" data-pos="left" data-remove="true" data-class="popup_filter" data-bg="hide_btn" class="has_icon btn_filter mgr"><i class="iccl fwb iccl-filter fwb mr__5"></i>Filter</a>
            <a href="#" data-id="#kalles-section-nt_filter" class="btn_filter js_filter dn mgr"><i class="iccl fwb iccl-filter fwb mr__5"></i>Filter</a>
        </div>
        <div class="cat_view col-auto on_list_view_false">
            <div class="dn dev_desktop">
                <a href="#" data-mode="grid" data-dev="dk" data-col="6" class="pr mr__10 cat_view_page view_6"></a>
                <a href="#" data-mode="grid" data-dev="dk" data-col="4" class="pr mr__10 cat_view_page view_4"></a>
                <a href="#" data-mode="grid" data-dev="dk" data-col="3" class="pr mr__10 cat_view_page view_3 active"></a>
            </div>
            <div class="dn dev_tablet dev_view_cat">
                <a href="#" data-dev="tb" data-col="6" class="pr mr__10 cat_view_page view_6"></a>
                <a href="#" data-dev="tb" data-col="4" class="pr mr__10 cat_view_page view_4"></a>
                <a href="#" data-dev="tb" data-col="3" class="pr cat_view_page view_3"></a>
            </div>
            <div class="flex dev_mobile dev_view_cat">
                <a href="#" data-dev="mb" data-col="12" class="pr mr__10 cat_view_page view_12"></a>
                <a href="#" data-dev="mb" data-col="6" class="pr cat_view_page view_6"></a>
            </div>
        </div>
        <div class="cat_sortby cat_sortby_js col tr kalles_dropdown kalles_dropdown_container">
            <a class="in_flex fl_between al_center sortby_pick kalles_dropDown_label" href="#">
                <span class="lbl-title sr_txt dn">Featured</span>
                <span class="lbl-title sr_txt_mb">Sort by</span>
                <i class="ml__5 mr__5 facl facl-angle-down"></i>
            </a>
            <div class="nt_sortby dn">
                <svg class="ic_triangle_svg" viewBox="0 0 20 9" role="presentation">
                    <path d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z" fill="#ffffff"></path>
                </svg>
                <div class="h3 mg__0 tc cd tu ls__2 dn_lg db">Sort by<i class="pegk pe-7s-close fs__50 ml__5"></i>
                </div>
                <div class="nt_ajaxsortby wrap_sortby kalles_dropdown_options">
                    <a data-label="Featured" class="kalles_dropdown_option truncate selected" href="#">Featured</a>
                    <a data-label="Best selling" class="kalles_dropdown_option truncate" href="#">Best selling</a>
                    <a data-label="Alphabetically, A-Z" class="kalles_dropdown_option truncate" href="#">Alphabetically, A-Z</a>
                    <a data-label="Alphabetically, Z-A" class="kalles_dropdown_option truncate" href="#">Alphabetically, Z-A</a>
                    <a data-label="Price, low to high" class="kalles_dropdown_option truncate" href="#">Price, low to high</a>
                    <a data-label="Price, high to low" class="kalles_dropdown_option truncate" href="#">Price, high to low</a>
                    <a data-label="Date, old to new" class="kalles_dropdown_option truncate" href="#">Date, old to new</a>
                    <a data-label="Date, new to old" class="kalles_dropdown_option truncate" href="#">Date, new to old</a>
                </div>
            </div>
        </div>
    </div>
    <!--end grid control-->

    <!--filter panel area-->
    <div class="filter_area_js filter_area lazyload">
        <div id="kalles-section-nt_filter" class="kalles-section nt_ajaxFilter section_nt_filter">
            <div class="h3 mg__0 tu bgb cw visible-sm fs__16 pr">Filter<i class="close_pp pegk pe-7s-close fs__40 ml__5"></i>
            </div>
            {{-- <div class="cat_shop_wrap">
                <div class="cat_fixcl-scroll">
                    <div class="cat_fixcl-scroll-content css_ntbar">
                        <div class="row wrap_filter"> --}}
                            {{-- <div class="col-12 col-md-3 widget">
                                <h5 class="widget-title">By Color</h5>
                                <div class="loke_scroll">
                                    <ul class="nt_filter_block nt_filter_color css_ntbar" data-filter_condition="and">
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag color black">
                                                <div class="filter-swatch">
                                                    <span class="swatch__value bg_color_black lazyload"></span>
                                                </div>
                                                black</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag color cyan">
                                                <div class="filter-swatch">
                                                    <span class="swatch__value bg_color_cyan lazyload"></span>
                                                </div>
                                                cyan</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag color green">
                                                <div class="filter-swatch">
                                                    <span class="swatch__value bg_color_green lazyload"></span>
                                                </div>
                                                green</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag color grey">
                                                <div class="filter-swatch">
                                                    <span class="swatch__value bg_color_grey lazyload"></span>
                                                </div>
                                                grey</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag color pink">
                                                <div class="filter-swatch">
                                                    <span class="swatch__value bg_color_pink lazyload"></span>
                                                </div>
                                                pink</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag color pink clay">
                                                <div class="filter-swatch">
                                                    <span class="swatch__value bg_color_pink-clay lazyload"></span>
                                                </div>
                                                pink clay</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag color sliver">
                                                <div class="filter-swatch">
                                                    <span class="swatch__value bg_color_sliver lazyload"></span>
                                                </div>
                                                sliver</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag color white">
                                                <div class="filter-swatch">
                                                    <span class="swatch__value bg_color_white lazyload"></span>
                                                </div>
                                                white</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag color white cream">
                                                <div class="filter-swatch">
                                                    <span class="swatch__value bg_color_white-cream lazyload" data-bg="assets/images/shop/color-white-cream.jpg"></span>
                                                </div>
                                                white cream</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag color beige">
                                                <div class="filter-swatch">
                                                    <span class="swatch__value bg_color_beige lazyload"></span>
                                                </div>
                                                beige</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag color blue">
                                                <div class="filter-swatch">
                                                    <span class="swatch__value bg_color_blue lazyload"></span>
                                                </div>
                                                blue</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag color brown">
                                                <div class="filter-swatch">
                                                    <span class="swatch__value bg_color_brown lazyload"></span>
                                                </div>
                                                brown</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            {{-- <div class="col-12 col-md-3 widget">
                                <h5 class="widget-title">By Price</h5>
                                <div class="loke_scroll">
                                    <ul class="nt_filter_block nt_filter_styleck css_ntbar" data-filter_condition="or">
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag price $50-$100">$50-$100</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag price $100-$150">$100-$150</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag price $150-$200">$150-$200</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag price $250-$300">$250-$300</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag price $350-$400">$350-$400</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag price $450-$500">$450-$500</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            {{-- <div class="col-12 col-md-3 widget">
                                <h5 class="widget-title">By Size</h5>
                                <div class="loke_scroll">
                                    <ul class="nt_filter_block nt_filter_styleck css_ntbar" data-filter_condition="and">
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag size s">s</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag size m">m</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag size l">l</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag size xs">xs</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag size xl">xl</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag size xxl">xxl</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            {{-- <div class="col-12 col-md-3 widget">
                                <h5 class="widget-title">By Brand</h5>
                                <div class="loke_scroll">
                                    <ul class="nt_filter_block nt_filter_styleck css_ntbar" data-filter_condition="and">
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag vendor ck">ck</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag vendor h&amp;m">h&amp;m</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag vendor kalles">kalles</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag vendor levi's">levi's</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag vendor monki">monki</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-label="Narrow selection to products matching tag vendor nike">nike</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                            {{-- <div class="col-12 tc mt__20 mb__20 dn">
                                <a class="button clear_filter_js" href="#">Clear All Filter</a></div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!--end filter panel area-->

    <!--product container-->
    <div class="row">

        <!--left sidebar-->
        <div class="js_sidebar sidebar sidebar_nt col-lg-3 col-12 space_30 hidden_false lazyload">
            <div id="kalles-section-sidebar_shop" class="kalles-section nt_ajaxFilter section_sidebar_shop type_instagram">
                <div class="h3 mg__0 tu bgb cw visible-sm fs__16 pr">Sidebar<i class="close_pp pegk pe-7s-close fs__40 ml__5"></i>
                </div>
                <div class="cat_shop_wrap">
                    <div class="cat_fixcl-scroll">
                        <div class="cat_fixcl-scroll-content css_ntbar">
                            <div class="row no-gutters wrap_filter">
                                <div class="col-12 col-md-12 widget hidden_sortby_false">
                                    <h5 class="widget-title">Sort by</h5>
                                    <div class="loke_scroll">
                                        <ul class="nt_filter_block nt_filter_sortby">
                                            <li class="active"><a href="#">Featured</a></li>
                                            <li><a href="#">Best selling</a></li>
                                            <li><a href="#">Alphabetically, A-Z</a></li>
                                            <li><a href="#">Alphabetically, Z-A</a></li>
                                            <li><a href="#">Price, low to high</a></li>
                                            <li><a href="#">Price, high to low</a></li>
                                            <li><a href="#">Date, old to new</a></li>
                                            <li><a href="#">Date, new to old</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 widget widget_product_categories cat_count_false">
                                    <h5 class="widget-title">Product Categories</h5>
                                    <ul class="product-categories">
                                        @foreach (categories() as $item)
                                        <li class="cat-item">
                                            <a href="{{ route('frontend.productbycategory', $item->id) }}">{{ $item->cat_name_en }}  <span class="cat_count"></span></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-12 col-md-12 widget">
                                    <h5 class="widget-title">Filter by price</h5>
                                    <div class="loke_scroll">
                                        <ul class="nt_filter_block nt_filter_styleck css_ntbar">
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag price $50-$100">$50-$100</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag price $100-$150">$100-$150</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag price $150-$200">$150-$200</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag price $250-$300">$250-$300</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag price $350-$400">$350-$400</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag price $450-$500">$450-$500</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- <div class="col-12 col-md-12 widget">
                                    <h5 class="widget-title">Filter by color</h5>
                                    <div class="loke_scroll">
                                        <ul class="nt_filter_block nt_filter_color css_ntbar">
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag color black">
                                                    <div class="filter-swatch">
                                                        <span class="swatch__value bg_color_black lazyload"></span>
                                                    </div>
                                                    black
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag color cyan">
                                                    <div class="filter-swatch">
                                                        <span class="swatch__value bg_color_cyan lazyload"></span>
                                                    </div>
                                                    cyan
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag color green">
                                                    <div class="filter-swatch">
                                                        <span class="swatch__value bg_color_green lazyload"></span>
                                                    </div>
                                                    green
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag color grey">
                                                    <div class="filter-swatch">
                                                        <span class="swatch__value bg_color_grey lazyload"></span>
                                                    </div>
                                                    grey
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag color pink">
                                                    <div class="filter-swatch">
                                                        <span class="swatch__value bg_color_pink lazyload"></span>
                                                    </div>
                                                    pink
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag color pink clay">
                                                    <div class="filter-swatch">
                                                        <span class="swatch__value bg_color_pink-clay lazyload"></span>
                                                    </div>
                                                    pink clay
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag color sliver">
                                                    <div class="filter-swatch">
                                                        <span class="swatch__value bg_color_sliver lazyload"></span>
                                                    </div>
                                                    sliver
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag color white">
                                                    <div class="filter-swatch">
                                                        <span class="swatch__value bg_color_white lazyload"></span>
                                                    </div>
                                                    white
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag color white cream">
                                                    <div class="filter-swatch">
                                                        <span class="swatch__value bg_color_white-cream lazyload" data-bg="assets/images/shop/color-white-cream.jpg"></span>
                                                    </div>
                                                    white cream
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag color beige">
                                                    <div class="filter-swatch">
                                                        <span class="swatch__value bg_color_beige lazyload"></span>
                                                    </div>
                                                    beige
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag color blue">
                                                    <div class="filter-swatch">
                                                        <span class="swatch__value bg_color_blue lazyload"></span>
                                                    </div>
                                                    blue
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag color brown">
                                                    <div class="filter-swatch">
                                                        <span class="swatch__value bg_color_brown lazyload"></span>
                                                    </div>
                                                    brown
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 widget">
                                    <h5 class="widget-title">Filter by size</h5>
                                    <div class="loke_scroll">
                                        <ul class="nt_filter_block nt_filter_styleck css_ntbar">
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag size l">l</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag size m">m</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag size s">s</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag size xl">xl</a>
                                            </li>
                                            <li>
                                                <a href="#" aria-label="Narrow selection to products matching tag size xs">xs</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end left sidebar-->

        <!--main content-->
        <div class="col-lg-9 col-12">
            <div class="kalles-section tp_se_cdt">

                <!--filter result-->
                <div class="result_clear mt__30 mb__20 dn">
                    <div class="sp_result_html dib cb clear_filter"><span class="cp">50</span> Products Found
                    </div>
                    <a class="clear_filter dib" href="#">Clear All Filter</a><a href="#" class="clear_filter dib bf_icons" aria-label="Remove tag Size  M">Size M</a><a href="#" class="clear_filter dib bf_icons" aria-label="Remove tag Color  Cyan">Color Cyan</a><a href="#" class="clear_filter dib bf_icons" aria-label="Remove tag Vendor  Kalles">Vendor Kalles</a>
                </div>
                <!--end filter result-->

                <!--products list-->
                <div class="on_list_view_false products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default">
                    @include('includes.products')
                </div>
                <!--end products list-->

                <!--navigation-->
                <div class="products-footer tc mt__40">
                   @if($products->hasPages())
                   <nav class="nt-pagination w__100 tc paginate_ajax">
                    <ul class="pagination-page page-numbers">
                        <li><a class="next page-numbers" href="{{ $products->previousPageUrl() }}">Previous</a></li>
                        <li><a class="next page-numbers" href="{{ $products->nextPageUrl() }}">Next</a></li>
                    </ul>
                </nav>
                   @endif
                </div>
                <!--end navigation-->

            </div>
        </div>
        <!--end main content-->

    </div>
    <!--end product container-->

</div>

</div>

@endsection