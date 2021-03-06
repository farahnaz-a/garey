@extends('layouts.frontend')

@section('title')
    Garey Store for Electronics in Qatar | {{ $cat->cat_name_en ?? 'Product Lists' }} @if(Route::is('frontend.productbysubcategory')) | {{ $subcat->subcat_name_en }} @endif
@endsection

@section('content')

  <!--shop banner-->
  <div class="kalles-section page_section_heading">
    <div class="page-head tc pr oh cat_bg_img page_head_">
        <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0" data-bgset="@isset($cat) {{ asset('web_images/categories/banners') }}/{{ $cat->id }}.jpg @else {{ asset('web_images/categories/banners/search.jpg') }}  @endisset"></div> 
        <div class="container pr z_100">
            <h1 class="mb__5 cw">
                @if(isset($cat))
                {{ $cat->cat_name_en }}
                @elseif(isset($type))
                {{ ucwords(str_replace('-', ' ', $type)) }}
                @else 
                All Products
                @endif
            </h1>
            <p class="mg__0">{{ $cat->desc ?? 'Shop through our latest selection of products.' }}</p>
        </div>
    </div>
</div>
<!--end shop banner-->
        <!-- breadcrumb -->
        <div class="bgbl pt__20 pb__20 lh__1">
            <div class="container">
                <div class="row al_center">
                    <div class="col">
                         <nav class="sp-breadcrumb">
                            <a href="{{ url('/') }}">Home</a><i class="facl facl-angle-right"></i>
                            @if(isset($type))
                            <a href="{{ route('frontend.productType', $type) }}">{{ ucwords(str_replace('-', ' ', $type)) }}</a>
                            @elseif(isset($cat))
                            <a href="{{ route('frontend.productbycategory', $cat->id) }}">{{ $cat->cat_name_en }}</a>
                            @if(Route::is('frontend.productbysubcategory')) 
                            <i class="facl facl-angle-right"></i>
                            <a href="{{ route('frontend.productbysubcategory', $subcat->id) }}">{{ $subcat->subcat_name_en }}</a>
                            @endif
                            @else 
                            <a href="{{ route('frontend.products') }}">Products</a>
                            @endif
                            {{-- <i class="facl facl-angle-right"></i>{{ $data->prod_title_en }} --}}
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
                <span class="lbl-title sr_txt dn">Sort by</span>
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
                    <a id="lth" data-label="Price, low to high" class="kalles_dropdown_option truncate" href="#">Price, low to high</a>
                    <a id="htl" data-label="Price, high to low" class="kalles_dropdown_option truncate" href="#">Price, high to low</a>
                    <a id="otn" data-label="Date, old to new" class="kalles_dropdown_option truncate" href="#">Date, old to new</a>
                    <a id="nto" data-label="Date, new to old" class="kalles_dropdown_option truncate" href="#">Date, new to old</a>
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
            <div class="cat_shop_wrap">
                <div class="cat_fixcl-scroll">
                    <div class="cat_fixcl-scroll-content css_ntbar">
                        @include('includes.filter')
                    </div>
                </div>
            </div> 
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
                                        <ul  class="nt_filter_block nt_filter_sortby">
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
                                        @isset($cat)
                                        @foreach (subcatbycat($cat->id) as $item)
                                        <li class="cat-item">
                                            <a href="{{ route('frontend.productbysubcategory', $item->id) }}">{{ $item->subcat_name_en }}  <span class="cat_count"></span></a>
                                        </li>
                                        @endforeach
                                        @else 
                                        @foreach (subcategories() as $item)
                                        <li class="cat-item">
                                            <a href="{{ route('frontend.productbysubcategory', $item->id) }}">{{ $item->subcat_name_en }}  <span class="cat_count"></span></a>
                                        </li>
                                        @endforeach
                                        @endisset
                                   
                                    </ul>
                                </div>
                                <div class="col-12 col-md-12 widget">
                                    <h5 class="widget-title">Filter by price</h5>
                                    <div class="loke_scroll">
                                        <ul class="nt_filter_block nt_filter_styleck css_ntbar">
                                            <li id="7">
                                                <a href="#" aria-label="Narrow selection to products matching tag price $50-$100">0-250</a>
                                            </li>
                                            <li id="8">
                                                <a href="#" aria-label="Narrow selection to products matching tag price $100-$150">250-500</a>
                                            </li>
                                            <li id="9">
                                                <a href="#" aria-label="Narrow selection to products matching tag price $150-$200">500-1000</a>
                                            </li>
                                            <li id="10">
                                                <a href="#" aria-label="Narrow selection to products matching tag price $250-$300">1000-2000</a>
                                            </li>
                                            <li id="11">
                                                <a href="#" aria-label="Narrow selection to products matching tag price $350-$400">2000-3000</a>
                                            </li>
                                            <li id="12">
                                                <a href="#" aria-label="Narrow selection to products matching tag price $450-$500">3000-4000</a>
                                            </li>
                                            <li id="13">
                                                <a href="#" aria-label="Narrow selection to products matching tag price $450-$500"> >4000 <span class="dn">-99999999999999999999999999999999999999999999999999999</span> </a>
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
                <div id="prods" class="on_list_view_false products nt_products_holder row fl_center row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default">
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

@section('js')
<script>
    $(document).ready(function(){
    @foreach ($brands as $item)
        $("#chck{{ $item->manufacture_en ?? '' }}").on("click", function(e){
            e.preventDefault();

            if($("#chck{{ $item->manufacture_en ?? '' }}").hasClass('active') == false)
            {
                let brand = "{{ $item->manufacture_en }}";
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });

                $.ajax({
                    url: "{{ route('frontend.filtersearch') }}",
                    type: "POST",
                    data: {
                        brand : brand
                    }, 
                    success: function(data)
                    {
                        $("#prods").html(data);
                        // $("#prods").load(location.href + " #prods");
                    } 
                    
                });
               
            }
            else 
            {
                $("#prods").load(location.href + " #prods");
            }
            
        });
    @endforeach

     $("#clear").on("click", function(e){
         e.preventDefault(); 
         $("#prods").load(location.href + " #prods");
     });


    @for($i = 1; $i <= 6; $i++)
    $("#{{ $i }}").on("click", function(e) {

        let price = $("#{{ $i }}").text(); 

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });

                $.ajax({
                    url: "{{ route('frontend.pricesearch') }}",
                    type: "POST",
                    data: {
                        price : price
                    }, 
                    success: function(data)
                    {
                        $("#prods").html(data); 
                        // $("#prods").load(location.href + " #prods");
                    } 
                    
                });


    });
    @endfor
    @for($i = 7; $i <= 12; $i++)
    $("#{{ $i }}").on("click", function(e) {

        let price = $("#{{ $i }}").text(); 

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

                $.ajax({
                    url: "{{ route('frontend.pricesearch') }}",
                    type: "POST",
                    data: {
                        price : price
                    }, 
                    success: function(data)
                    {
                        $("#prods").html(data); 
                        // $("#prods").load(location.href + " #prods");
                    } 
                    
                });


    });
    @endfor

    $("#lth").on("click", function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url : "{{ route('frontend.lth') }}", 
            type : "GET", 
            success : function(data)
            {
               $("#prods").html(data);
            }
        });

    });

    $("#htl").on("click", function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url : "{{ route('frontend.htl') }}",
            type : "GET", 
            success: function(data)
            {
                $("#prods").html(data);
            }
        });
    });

    $("#otn").on("click", function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url : "{{ route('frontend.otn') }}",
            type : "GET", 
            success: function(data)
            {
                $("#prods").html(data);
            }
        });
    });
    $("#nto").on("click", function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url : "{{ route('frontend.nto') }}",
            type : "GET", 
            success: function(data)
            {
                $("#prods").html(data);
            }
        });
    });

    });
</script>
@endsection